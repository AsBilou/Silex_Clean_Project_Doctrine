<?php

use Symfony\Component\HttpFoundation\Request;

$admin = $app['controllers_factory'];


$app->get('/login', function(Request $request) use ($app) {
    return $app['twig']->render('template/admin/login.twig', array(
        'error'         => $app['security.last_error']($request),
        'last_username' => $app['session']->get('_security.last_username'),
    ));
})->bind('login');

$admin->get('/', function () use ($app) {

    return $app['twig']->render('template/admin/index.twig', array(

    ));

})->bind('admin');

return $app;

?>