# [Slim 3](https://github.com/slimphp/Slim) [Bootstrap 4](https://github.com/twbs/bootstrap) [Twig](https://github.com/twigphp/Twig) Boilerplate

Simple skeleton/boilerplate for using [Slim 3](https://github.com/slimphp/Slim) with [Bootstrap 4](https://github.com/twbs/bootstrap) and [Twig](https://github.com/twigphp/Twig). 

Uses [Laravel Mix](https://github.com/JeffreyWay/laravel-mix/blob/master/docs/installation.md) to compile Sass and move Css/JS into single files within the Public as well as allowing you to live reload with [Browser sync](https://github.com/BrowserSync/browser-sync).

I personally ran this project on [Laravel Homestead](https://github.com/laravel/homestead).

# Instructions

1. `npm install` for node dependencies
2. `composer update` for php depencies
3. Replace Browser sync url `slim3bootstrap.test` with your own local server address in `webpack.mix.js`
4. Live reload is accessible by running `npm run watch` This will compile Sass on the fly and reload live in the browser.

# File structure

- `/resources/` contains folders for Twig Views and Assets for development.
- `/resources/assets/` contains files for editing Sass/Scss and Javascript. These files are compiled and moved to the Public folder by [Laravel Mix](https://github.com/JeffreyWay/laravel-mix/blob/master/docs/installation.md).
- `/public/` contains all public files rendered to the user including compiled Css and Javacript along with Php code.