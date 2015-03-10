<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Anagram.php";

    $app = new Silex\Application();

    $app['debug']=TRUE;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render("input_form.twig");
    });

    $app->get("/anagram_check", function() use($app) {
        $input_words = new Anagram;
        $match = $input_words->compareWords($_GET['input1'], $_GET['input2']);
        return $app['twig']->render("anagram_check.twig", array('answer' => $match));
    });

    return $app;

?>
