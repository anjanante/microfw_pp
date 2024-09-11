<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

require __DIR__. '/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug']=true;

$app->get('/', function(){
    return new Response(getContent());
});

$app->post('/submit', function(Request $request){
    return new Response(postContent($request->request));
});


function getContent(){
    $template = <<<EOF
<form method="POST" action="app.php/submit">
    <input name="name">
    <button type="submit">Send</button>
</form>
EOF;
    return $template;
}

function postContent($request){
    $name = $request->get('name');
    return sprintf('Hello %s', $name);
}

$app->run();
