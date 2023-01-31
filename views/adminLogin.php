<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-dark">

    <img src="images/Green_River_College.svg" width="15%" height="15%"
         class="d-inline-block align-top" alt="Brand Image"
         onclick="window.location.href='home'">
<h1>Admin Login</h1>
</nav>
<form action="adminPage" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br>
    <input type="submit" value="Login">
</form>

<?php
echo 'Hello World';
?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    // Check connection
    if ($dbh->connect_error) {
        die("Connection failed: " . $dbh->connect_error);
    }
    // Check if the user exists in the database
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $dbh->query($sql);
    if ($result->num_rows > 0) {
        // Set the session variable
        $_SESSION["admin"] = true;
        // Redirect to the admin page
        header("location: index.php");
    } else {
        echo "Invalid username or password";
    }
    $dbh->close();
}
?>


</html>
