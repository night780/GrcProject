<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Quarterly Planer</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<form id="admin-login" action="adminLogin" method="get">
    <button type="submit" class="center-button">Admin Login</button>
</form>
<nav class="navbar navbar-expand-lg navbar-light bg-dark">

    <img src="images/Green_River_College.svg" width="15%" height="15%"
         class="d-inline-block align-top" alt="Brand Image"
         onclick="window.location.href='home'">

</nav>


<h1 class="text-center">Student Quarterly Planner</h1>
<div style="display: flex; justify-content: center; padding: 10%";>

    <form action="newPlan" method="get">
        <button type="submit" class="center-button">New Plan</button>
    </form>

    <form action="updatePlan" method="get">
        <button type="submit" class="center-button">Update Plan</button>
    </form>


</div>



</html>
</body>
