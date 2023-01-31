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
        <select class="form-control" id="quarterYear" name="quarterYear"
                onchange="addForm(this.value)">
            <option value="">Select Quarter and Year</option>
        </select>
    </div>

    <div id="formsContainer"></div>

    <button type="submit" class="btn btn-primary" id="submitBtn"
            style="display: none;">Submit
    </button>

</form>
<script>
    function addForm(selectedValue) {
        if (!selectedValue) return;
        let year = (new Date()).getFullYear();
        let quarterYear = selectedValue.split(" ");
        let quarter = quarterYear[0];
        year = parseInt(quarterYear[1]);
        let formId = quarter + year;
        let existingForm = document.getElementById(formId);
        if (existingForm) {
            existingForm.style.display = "block";
            return;
        }
        let form = document.createElement("div");
        form.id = formId;
        form.className = "form-group";
        form.style.marginTop = "20px";
        let classesLabel = document.createElement("label");
        classesLabel.htmlFor = quarter + "Classes";
        classesLabel.innerHTML = quarter + " Classes:";
        let classesYear = document.createElement("label");
        classesYear.innerHTML = year;
        classesLabel.appendChild(classesYear);
        let classesInput = document.createElement("input");
        classesInput.type = "text";
        classesInput.className = "form-control";
        classesInput.id = quarter + "Classes";
        classesInput.name = quarter + "Classes";
        classesInput.value = "{{@quarter}}"+"{{@year}}"+"{{@Classes}}";
        form.appendChild(classesLabel);
        form.appendChild(classesInput);
        document.getElementById("formsContainer").appendChild(form);
        document.getElementById("submitBtn").style.display = "block";
    }

    function populateQuarterYearOptions() {
        let currentYear = (new Date()).getFullYear();
        let quarters = ["Summer", "Fall", "Winter", "Spring"];
        let select = document.getElementById("quarterYear");
        for (let i = 0; i < quarters.length; i++) {
            for (let j = -1; j <= 1; j++) {
                let option = document.createElement("option");
                option.value = quarters[i] + " " + (currentYear + j);
                option.innerHTML = option.value;
                select.appendChild(option);
            }
        }
    }

    populateQuarterYearOptions();
</script>


</body>
</html>
