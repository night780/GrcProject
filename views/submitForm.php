<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/../config.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $summerClasses = $_POST['summerClasses'];
    $fallClasses = $_POST['fallClasses'];
    $winterClasses = $_POST['winterClasses'];
    $springClasses = $_POST['springClasses'];
    $uniqueId = $_POST['uniqueId'];

    echo "Unique ID: " . $uniqueId . "<br>";

    echo "Summer Classes: " . $summerClasses . "<br>";
    echo "Fall Classes: " . $fallClasses . "<br>";
    echo "Winter Classes: " . $winterClasses . "<br>";
    echo "Spring Classes: " . $springClasses;
}
?>
<h1>Testing</h1>