<?php
require_once 'vendor/autoload.php';

$app          = new Silex\Application();
$app["debug"] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/', function () use ($app) {

    return $app['twig']->render(
        'home.twig', array()
    );
});

$app->mount('/wifi-solutions', new LogicWiFi\Website\WifiSolutionsController($app));

$app->run();