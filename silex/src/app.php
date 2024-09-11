<?php

use Symfony\Component\HttpFoundation\Response;

require __DIR__. '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug']=true;

$app->match('/', function(){
    return new Response("This is my firt page");
});

$app->run();
