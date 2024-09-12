<?php

use Slim\Http\Request;
use Slim\Http\Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

require __DIR__. '/../vendor/autoload.php';

$app = new \Slim\App();

$app->get('/', function (Request $req,  Response $res, $args = []) {
    return $res->withStatus(200)->write('Hello');
});

$app->get('/foo', function (ServerRequestInterface $request, ResponseInterface $response) {
    // Use the PSR-7 $request object
    return $response;
});

// $app->add(function (ServerRequestInterface $request, ResponseInterface $response, callable $next) {
//     // Use the PSR-7 $response object
//     // return $next($request, $response);
//     return $response->withStatus(302)->write('302 A');
// });

$app->run();