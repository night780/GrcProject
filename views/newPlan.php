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
<?php
echo "Hello world"
?>
<form action="submitForm" method="post"
      onsubmit="return confirm('Are you sure you want to submit this form?');">

    <div class="form-group">
        <label for="quarterYear">Quarter and Year:</label>
        <select class="form-control" id="quarterYear" name="quarterYear">
        </select>
    </div>

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
<script>
    const year = new Date().getFullYear();
    const quarterYear = document.getElementById('quarterYear');

    const quarters = [
        `Summer ${year - 1}`,
        `Fall ${year}`,
        `Winter ${year}`,
        `Spring ${year}`,
        `Summer ${year}`,
        `Fall ${year + 1}`,
        `Winter ${year + 1}`,
        `Spring ${year + 1}`
    ];

    for (const quarter of quarters) {
        const option = document.createElement('option');
        option.value = quarter;
        option.text = quarter;
        quarterYear.add(option);
    }
</script>

</body>
</html>
