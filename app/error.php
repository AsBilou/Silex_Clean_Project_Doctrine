<?php

use Symfony\Component\HttpFoundation\Response;


$app->get('/404', function () use ($app) {

    return $app['twig']->render('template/error/404.twig', array(

    ));

})->bind('404');

$app->error(function (\Exception $e, $code) use ($app) {
    if($app['debug']) {
        return;
    }
    switch ($code) {
        case 404:
            //return $app->redirect($app['url_generator']->generate('404'));
            return new Response( $app['twig']->render('template/error/404.twig'), 404);
            break;
        default:
            $message = 'We are sorry, but something went terribly wrong.';
    }

    return new Response($message);
});

return $app;

?>