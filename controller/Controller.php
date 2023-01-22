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

    function submitForm($f3)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $summerClasses = $_POST['summerClasses'];
            $_SESSION['summerClasses'] = $summerClasses;

            $fallClasses = $_POST['fallClasses'];
            $_SESSION['fallClasses'] = $fallClasses;

            $winterClasses = $_POST['winterClasses'];
            $_SESSION['winterClasses'] = $winterClasses;

            $springClasses = $_POST['springClasses'];
            $_SESSION['springClasses'] = $springClasses;

            function IdGenerator($length = 6) {
            $characters = 'ABCDEFHIJKLMNOPQRSTUVWXYZ2345679';
            $strlen = strlen($characters);
            $uniqueId = '';
            for ($i = 0; $i < $length; $i++) {
                $uniqueId .= $characters[rand(0, $strlen - 1)];
            }
            return $uniqueId;
        }
            $uniqueId = IdGenerator();
            $_SESSION['uniqueId'] = $uniqueId;
            $this->_f3->set('uniqueId', $uniqueId);

            $f3->set('summerClasses', $_SESSION['summerClasses']);
            $f3->set('fallClasses', $_SESSION['fallClasses']);
            $f3->set('winterClasses', $_SESSION['winterClasses']);
            $f3->set('springClasses', $_SESSION['springClasses']);
            $f3->set('uniqueId', $_SESSION['uniqueId']);

            $_SESSION['isFormSent'] = '✔ Submitted';
                $f3->set('isFormSent', '✔ Submitted');
        }else{
            $_SESSION['isFormSent'] = '❌ Failed to Submit';
            $f3->set('isFormSent', '❌ Failed to Submit');
        }


        $view = new Template();
        echo $view->render('views/submitForm.php');
    }

}