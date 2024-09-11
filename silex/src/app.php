<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__. '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug']=true;

$app->match('/', function(Request $request){
    return new Response(getContent($request->query->all()));
});

function getContent($parameters){
    $name = $parameters['name'] ?? 'ANONYME';
    return "This is my firt page $name";
}

$app->run();
