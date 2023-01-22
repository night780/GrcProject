<?php

//Require the autoload file
require_once('vendor/autoload.php');

//Starts session
session_start();
//creates an instance of base class
$f3 = Base::instance();

$con = new Controller($f3);
$dataLayer = new DataLayer();

//Define a default route
$f3->route(/**
 * HOME
 * @return void
 */ 'GET /', function () {

    $GLOBALS['con']->home();
});
//Define a home route
$f3->route(/**
 * HOME
 * @return void
 */ 'GET /home', function () {
    $GLOBALS['con']->home();
});

//Define a new plan route
$f3->route(/**
 * FEATURES
 * @return void
 */ 'GET|POST /newPlan', function ($f3) {

    $GLOBALS['con']->newPlan($f3);

});
//Define a update plan route
$f3->route(/**
 * ENTRY
 * @return void
 */ 'GET|POST /updatePlan', function ($f3) {

    $GLOBALS['con']->updatePlan($f3);

});

$f3->route(/**
 * ENTRY
 * @return void
 */ 'POST /submitForm', function ($f3) {

    $GLOBALS['con']->submitForm($f3);

});


//runs fat free
$f3->run();