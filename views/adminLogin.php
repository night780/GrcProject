<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<form action="adminLogin" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Login">
</form>

<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username == "admin" && $password == "adminpassword") {
        $_SESSION["admin"] = true;
        header("location: index.php");
    } else {
        echo "Invalid username or password";
    }
}
?>


<nav class="navbar navbar-expand-lg navbar-light bg-dark">

</nav>
</html>
