<p align="center"><img width=400px src="https://skript-mc.fr/assets/images/logo.png"></p>
<h2 align="center">Skript Codespace</h2>
<p align="center">
    Skript specific development platform, allowing to execute code in real time in order to receive a result in a console. Developed for Skript-MC.
</p>

## 🚀 Installation

This project requires the [skript-codespace-parser](https://github.com/Romitou/skript-codespace-parser) project in order to make it work.
Please follow the parser installation instructions before installing the client.

- Install [PHP 7.4+](https://www.php.net/downloads) & [Composer](https://getcomposer.org/) on your machine;
- Download the [latest stable version](https://github.com/Romitou/skript-codespace/releases/latest) or clone this repository to test the latest changes;
- Rename `.env.example` into `.env`, and fill in the fields as indicated by the comments in the file;
- Execute the `yarn` command to install all required Node modules. If the `yarn` command is not found, install it with `npm i -g yarn` and repeat this step;
- Execute the `composer install` command to install all required PHP packages. If the `composer` command is not found, [install Composer](https://getcomposer.org/doc/00-intro.md);
- If you want to use the Symfony server, [install it](https://symfony.com/download). Otherwise, you can use another web server such as NGINX or Apache;
- Let's go, run your web server and go to test!

## 🔍 Bug report and suggestions

- 🐛 Have you noticed a bug when using Skript Codespace?
- 💡 Do you have an idea or a suggestion?
- 💬 Would you like to share something with us?

You can go to the [issues](https://github.com/Romitou/skript-codespace/issues) and create one; we will take a look at it as soon as possible!

## 🔨 Development and contributions

Our Pull Request are open for contributions! You can [fork](https://github.com/Romitou/skript-codespace/fork) of this repository and make your changes there. Make sure you add as few dependencies as possible.
Don't hesitate to contact me on Discord: Romitou#9685.

### Original proof of concept:
Skript specific development platform, allowing to execute code in real time in order to receive a result in a console.
This will be based on the skript-parser project, allowing Skript code to be executed outside Minecraft servers.
We will use Symfony and probably Spring to create an intermediary with Java that will return the result of the executed code.
Different functionalities will be added: code sharing, real-time editing with collaborators, support for different add-ons... and more!

The beginning of the development of this project is subject to the progress of the other personal projects, but should start around **January 2021**.
