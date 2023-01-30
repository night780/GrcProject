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

    function adminLogin()
    {
        $view = new Template();
        echo $view->render('views/adminLogin.php');
    }
    function adminPage()
    {
        $view = new Template();
        echo $view->render('views/adminPage.php');
    }

    function newPlan()
    {
        $view = new Template();
        echo $view->render('views/newPlan.php');
    }

    function updatePlan($f3, $dbh)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $uniqueId = $_POST['uniqueId'];

            $stmt = $dbh->prepare("SELECT * FROM plans WHERE uniqueId = :uniqueId");
            $stmt->bindParam(':uniqueId', $uniqueId);
            $stmt->execute();
            $plan = $stmt->fetch();

            if ($plan) {
                $f3->set('plan', $plan);

                if (isset($_POST['update'])) {
                    $summerClasses = $_POST['summerClasses'];
                    $fallClasses = $_POST['fallClasses'];
                    $winterClasses = $_POST['winterClasses'];
                    $springClasses = $_POST['springClasses'];

                    $stmt = $dbh->prepare("UPDATE plans SET summerClasses = :summerClasses, fallClasses = :fallClasses, winterClasses = :winterClasses, springClasses = :springClasses WHERE uniqueId = :uniqueId");
                    $stmt->bindParam(':summerClasses', $summerClasses);
                    $stmt->bindParam(':fallClasses', $fallClasses);
                    $stmt->bindParam(':winterClasses', $winterClasses);
                    $stmt->bindParam(':springClasses', $springClasses);
                    $stmt->bindParam(':uniqueId', $uniqueId);
                    $stmt->execute();

                    echo $summerClasses;
                    echo $fallClasses;
                    echo $winterClasses;
                    echo $springClasses;

                    echo "Plan Updated!";
                }
            } else {
                echo "Plan not found!";
            }
        }
        $view = new Template();
        echo $view->render('views/updatePlan.php');
    }


    function submitForm($f3, $dbh)
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

            $uniqueId = '';

            function IdGenerator($length = 6)
            {
                $characters = 'ABCDEFHIJKLMNOPQRSTUVWXYZ2345679';
                $strlen = strlen($characters);

                for ($i = 0; $i < $length; $i++) {
                    $uniqueId .= $characters[rand(0, $strlen - 1)];
                }
                return $uniqueId;
            }


            $uniqueId = IdGenerator();
            $_SESSION['uniqueId'] = $uniqueId;
            var_dump($_SESSION['uniqueId']);
            try {
                $stmt = $dbh->prepare("INSERT INTO plans (uniqueId, summerClasses, fallClasses, winterClasses, springClasses) VALUES (:uniqueId, :summerClasses, :fallClasses, :winterClasses, :springClasses)");
                $stmt->bindParam(':uniqueId', $uniqueId);
                $stmt->bindParam(':summerClasses', $summerClasses);
                $stmt->bindParam(':fallClasses', $fallClasses);
                $stmt->bindParam(':winterClasses', $winterClasses);
                $stmt->bindParam(':springClasses', $springClasses);
                $stmt->execute();
                $_SESSION['isFormSent'] = '✔ Submitted';
                $f3->set('isFormSent', '✔ Submitted');
            } catch (PDOException $e) {
                $_SESSION['isFormSent'] = '❌ Failed to Submit';

                $f3->set('isFormSent', '❌ Failed to Submit');
                echo "Error: " . $e->getMessage();
            }

        } else {
            $_SESSION['isFormSent'] = '❌ Failed to Submit';
            $uniqueId = $_SESSION['uniqueId'];

            $f3->set('isFormSent', '❌ Failed to Submit');

        }
        //THIS IS A TEST
        //THIS IS A TEST
       // header("Location: /submitForm/$uniqueId");
      //  exit;

        echo Template::instance()->render('views/submitForm.php');
    }
}