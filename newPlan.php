<?php include 'includes/header.html'; ?>

<div class="details">
    <h3>Unique ID:</h3>
    <p> <?php function IdGenerator($length = 6) {
            $characters = 'ABCDEFHIJKLMNOPQRSTUVWXYZ2345679';
            $strlen = strlen($characters);
            $randomString = '';
            for ($i = 0; $i < $length; $i++) {
                $randomString .= $characters[rand(0, $strlen - 1)];
            }
            return $randomString;
        }
        echo IdGenerator(); ?> </p>
</div>

<form action="submitForm.php" method="post" onsubmit="return confirm('Are you sure you want to submit this form?');">
    <div class="form-group">
        <label for="summerClasses">Summer Classes:</label>
        <input type="text" class="form-control" id="summerClasses" name="summerClasses">
    </div>





    <div class="form-group">
        <label for="fallClasses">Fall Classes:</label>
        <input type="text" class="form-control" id="fallClasses" name="fallClasses">
    </div>
    <div class="form-group">
        <label for="winterClasses">Winter Classes:</label>
        <input type="text" class="form-control" id="winterClasses" name="winterClasses">
    </div>
    <div class="form-group">
        <label for="springClasses">Spring Classes:</label>
        <input type="text" class="form-control" id="springClasses" name="springClasses">
    </div>
    <button type="submit" value="Submit" class="btn
    btn-primary">Submit</button>

</form>

</body>
</html>
