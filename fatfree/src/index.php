<?php

require __DIR__. '/../vendor/autoload.php';

// $f3 = require(__DIR__.'/../vendor/bcosca/fatfree-core/base.php');
$f3 = \Base::instance();
$f3->route('GET /',
    function() {
        echo 'Hello, world!';
    }
);
$f3->run();