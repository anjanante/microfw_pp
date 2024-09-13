<?php

require __DIR__. '/../vendor/autoload.php';

// $f3 = require(__DIR__.'/../vendor/bcosca/fatfree-core/base.php');
$f3 = \Base::instance();
$f3->route('GET /',
    function($f3) {
        $f3->set('name','world');
        $view=new View;
        echo $view->render('/../views/template.htm');
    }
);
$f3->run();