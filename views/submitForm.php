<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Quarterly Planer</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">

    <img src="images/Green_River_College.svg" width="15%" height="15%"
         class="d-inline-block align-top" alt="Brand Image"
         onclick="window.location.href='home'">

</nav>
<h1 class="text-center">New Quarterly Planner</h1>

<table>
    <tr>
        <td>Form submitted successfully?: {{@SESSION.isFormSent}}</td>
    </tr>
<!--    <tr>-->
<!--        <td>Summer Classes:</td>-->
<!--        <td>{{@SESSION.summerClasses}}</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Fall Classes:</td>-->
<!--        <td>{{@SESSION.fallClasses}}</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Winter Classes:</td>-->
<!--        <td>{{@SESSION.winterClasses}}</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Spring Classes:</td>-->
<!--        <td>{{@SESSION.springClasses}}</td>-->
<!--    </tr>-->
<!--    <tr>-->
<!--        <td>Unique ID:</td>-->
<!--        <td>{{@SESSION.uniqueId}}</td>-->
<!--    </tr>-->
</table>
<?php
if (isset($_POST) && count($_POST) > 0) {
    foreach ($_POST as $key => $value) {
        if (strpos($key, "Classes") !== false) {
            $quarterYear = str_replace("Classes", "", $key);
            echo "Classes for " . $quarterYear . ": " . $value . "<br>";
        }
    }
}
?>

<script>
    function printPage() {
        window.print();
    }
</script>
<script>
    if (window.matchMedia) {
        var mediaQueryList = window.matchMedia('print');
        mediaQueryList.addListener(function (mql) {
            if (mql.matches) {
                // before print
            } else {
                // after print
                if (!window.matchMedia('print').matches) {
                    alert("No printer found. Please connect a printer and try again.");
                }
            }
        });
    }
</script>

<button class="print-button" onclick="printPage()">Print</button>



