<?php

//Require the autoload file
require_once('vendor/autoload.php');


//Starts session
session_start();
require_once($_SERVER['DOCUMENT_ROOT'] . '/../config.php');
//creates an instance of base class
$f3 = Base::instance();

$con = new Controller($f3, $dbh);
$dataLayer = new DataLayer();

//Define a default route
$f3->route(/**
 * HOME
 * @return void
 */ 'GET /', function () {

    $GLOBALS['con']->home();
});

//Define a admin login route
$f3->route(/**
 * HOME
 * @return void
 */ 'GET|POST /adminLogin', function () {

    $GLOBALS['con']->adminLogin();
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
 */ 'GET|POST /newPlan', function ($f3) use ($dbh) {

    $GLOBALS['con']->newPlan($f3);

});
//Define a update plan route
$f3->route(/**
 * ENTRY
 * @return void
 */ 'GET|POST /updatePlan', function ($f3) use ($dbh) {

    $GLOBALS['con']->updatePlan($f3, $dbh);

});

$f3->route(/**
 * ENTRY
 * @return void
 */ 'POST /submitForm', function ($f3) use ($dbh) {


    $GLOBALS['con']->submitForm($f3, $dbh);


});


//runs fat free
$f3->run();