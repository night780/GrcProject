<?php


/**
 *Controller class for handling indexs logic/page interlinking
 */
class Controller
{

    private $_f3; //F3 object


    function __construct($f3)
    {
        $this->_f3 = $f3;
    }


    function home()
    {
        $view = new Template();
        echo $view->render('views/home.php');
    }
    function newPlan()
    {
        $view = new Template();
        echo $view->render('views/newPlan.php');
    }
    function updatePlan()
    {
        $view = new Template();
        echo $view->render('views/updatePlan.php');
    }

    function submitForm()
    {
        $view = new Template();
        echo $view->render('views/submitForm.php');
    }

}