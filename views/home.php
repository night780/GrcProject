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

<h1>Advisor Lookup</h1>
<p>Enter your student ID:</p>
<input type="text" id="studentID" style="width: 200px">
<br><br>
<button onclick="lookupAdvisor()">Lookup Advisor</button>
<br><br>
<p>Your Advisor:</p>
<textarea id="advisor" disabled style="width: 200px"></textarea>

<script>
    function lookupAdvisor() {
        // Sample data for student IDs and advisors
        const advisors = {
            "12345": "Advisor A",
            "67890": "Advisor B",
            "11111": "Advisor C"
        };

        // Get the student ID entered by the user
        const studentID = document.getElementById("studentID").value;

        // Look up the advisor for the entered student ID
        const advisor = advisors[studentID];

        // Display the advisor in the textarea
        if (advisor) {
            document.getElementById("advisor").value = advisor;
        } else {
            document.getElementById("advisor").value = ("No advisor found " +
                "for the entered student ID.");

        }
    }
</script>
</html>
</body>
