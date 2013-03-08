<?php
try {
	$app = require __DIR__ . '/../app/web.php';
    $app = require __DIR__ . '/../app/admin.php';
    $app = require __DIR__ . '/../app/error.php';
    //On monte le controller de la partie admin
    $app->mount('/admin',$admin);
	$app->run();
} catch( \Exception $e ) {
	echo $e->getMessage();
}
?>