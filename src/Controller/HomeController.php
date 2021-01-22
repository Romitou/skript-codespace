<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/")
 * Class HomeController
 * @package App\Controller
 */
class HomeController extends AbstractController
{
    /**
     * @Route("", name="home")
     * @return Response
     */
    public function home(): Response
    {
        return $this->render('home.html.twig', [
            'title' => 'Hello!'
        ]);
    }
}