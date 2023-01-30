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

<form action="submitForm" method="post"
      onsubmit="return confirm('Are you sure you want to submit this form?');">

    <div class="form-group">
        <label for="summerClasses">Summer Classes:</label>
        <input type="text" class="form-control" id="summerClasses" name="summerClasses" value="{{@summerClasses}}">
    </div>
    <div class="form-group">
        <label for="fallClasses">Fall Classes:</label>
        <input type="text" class="form-control" id="fallClasses" name="fallClasses" value="{{@fallClasses}}">
    </div>
    <div class="form-group">
        <label for="winterClasses">Winter Classes:</label>
        <input type="text" class="form-control" id="winterClasses" name="winterClasses" value="{{@winterClasses}}">
    </div>
    <div class="form-group">
        <label for="springClasses">Spring Classes:</label>
        <input type="text" class="form-control" id="springClasses" name="springClasses" value="{{@springClasses}}">
    </div>


    <input type="hidden" name="uniqueId" value="{{@uniqueId}}">
    <button type="submit" class="btn btn-primary">Submit</button>

</form>

</body>
</html>
