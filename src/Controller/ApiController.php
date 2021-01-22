<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\HttpClient\Exception\ExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\HttpExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

/**
 * @Route("/api")
 * Class ApiController
 * @package App\Controller
 */
class ApiController extends AbstractController
{
    /**
     * @Route("/parser", methods={"POST"})
     * @param Request $request
     * @param HttpClientInterface $httpClient
     * @return JsonResponse
     */
    public function parse(Request $request, HttpClientInterface $httpClient): JsonResponse
    {
        $code = $request->request->get('script');
        if (!$code) return new JsonResponse(['error' => 'Votre requête est invalide.'], Response::HTTP_BAD_REQUEST);
        try {
            $response = $httpClient->request('POST', $this->getParameter('parserApi') . '/parser', [
                'headers' => [
                    'Content-Type' => 'application/json',
                ],
                'body' => $this->json(['script' => $code])->getContent()
            ]);
            return new JsonResponse($response->toArray());
        } catch (HttpExceptionInterface | ExceptionInterface $e) {
            return new JsonResponse(['error' => 'Une erreur interne est survenue.'], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}