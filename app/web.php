<?php

use Silex\Provider\FormServiceProvider;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints as Assert;

$app = require __DIR__.'/bootstrap.php';

//Controlers

//Appel le fichier twig en fonction de la page
$app->get('/', function () use ($app) {

    return $app['twig']->render('template/site/index.twig', array(
        
    ));

});

return $app;

?>