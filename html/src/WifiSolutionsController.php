<?php

Namespace LogicWiFi\Website;

use Silex\Application;
use Silex\Api\ControllerProviderInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class WifiSolutionsController implements ControllerProviderInterface
{

    public function __construct(Application $app) {

    }

    public function connect(Application $app) {

        $controllers = $app['controllers_factory'];

        $controllers->get('/', function (Application $app) {
        	return "No Ok";
        });

        $controllers->get('/social-wifi/', function (Application $app) {

            return $app['twig']->render(
                'social-wifi.twig', array()
            );
        });  


        return $controllers;
    }
}

?>