<?php

//Require the autoload file
require_once('vendor/autoload.php');

//Starts session
session_start();
//creates an instance of base class
$f3 = Base::instance();

$con = new Controller($f3);


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
 */ 'GET /newPlan', function () {

    $GLOBALS['con']->newPlan();

});
//Define a update plan route
$f3->route(/**
 * ENTRY
 * @return void
 */ 'GET /updatePlan', function () {

    $GLOBALS['con']->updatePlan();

});

$f3->route(/**
 * ENTRY
 * @return void
 */ 'POST /submitForm', function () {

    $GLOBALS['con']->submitForm();

});


//runs fat free
$f3->run();