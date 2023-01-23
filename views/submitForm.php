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
    <tr>
        <td>Summer Classes:</td>
        <td>{{@SESSION.summerClasses}}</td>
    </tr>
    <tr>
        <td>Fall Classes:</td>
        <td>{{@SESSION.fallClasses}}</td>
    </tr>
    <tr>
        <td>Winter Classes:</td>
        <td>{{@SESSION.winterClasses}}</td>
    </tr>
    <tr>
        <td>Spring Classes:</td>
        <td>{{@SESSION.springClasses}}</td>
    </tr>
    <tr>
        <td>Unique ID:</td>
        <td>{{@SESSION.uniqueId}}</td>
    </tr>
</table>
<?php
function submitForm()
{
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        // Get form data
        $summerClasses = $_POST['summerClasses'];
        $fallClasses = $_POST['fallClasses'];
        $winterClasses = $_POST['winterClasses'];
        $springClasses = $_POST['springClasses'];
        $uniqueId = IdGenerator();

        // Connect to the database
        try {
            $db = new PDO("mysql:host=hostname;dbname=dbname", "username", "password");
        } catch (PDOException $e) {
            die("Error: " . $e->getMessage());
        }

        // Insert form data into the database
        $stmt = $db->prepare("INSERT INTO plans (uniqueId, summerClasses, fallClasses, winterClasses, springClasses) VALUES (:uniqueId, :summerClasses, :fallClasses, :winterClasses, :springClasses)");
        $stmt->bindParam(':uniqueId', $uniqueId);
        $stmt->bindParam(':summerClasses', $summerClasses);
        $stmt->bindParam(':fallClasses', $fallClasses);
        $stmt->bindParam(':winterClasses', $winterClasses);
        $stmt->bindParam(':springClasses', $springClasses);
        $stmt->execute();

        // Redirect to confirmation page or display success message
        echo "Form submitted successfully!";
    }
}

?>
