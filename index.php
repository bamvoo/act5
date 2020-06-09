<?php

    ini_set('display_errors', 'On');
    require __DIR__.'/vendor/autoload.php';

    use Rentit\App;
    use Rentit\Session;

    //Método estático de de la classe App
    App::run();
