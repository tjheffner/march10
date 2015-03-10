<?php
    require_once = __DIR__."/../vendor/autoload.php";
    require_once = __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app['debug']=TRUE;

    //twig info here

    $app->get("/", function() use ($app) {
        return "Home";
    });

    return $app;

?>
