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
        $input_words2 = new Anagram;
        $input_words3 = new Anagram;
        $input_words4 = new Anagram;

        $match = $input_words->compareWords($_GET['input1'], $_GET['input2']);
        $match2 = $input_words2->compareWords($_GET['input1'], $_GET['input3']);
        $match3 = $input_words3->compareWords($_GET['input1'], $_GET['input4']);
        $match4 = $input_words4->compareWords($_GET['input1'], $_GET['input5']);

        $matches = array($match, $match2, $match3, $match4);

        return $app['twig']->render("anagram_check.twig", array('answer' => $matches));
    });

    return $app;

?>
