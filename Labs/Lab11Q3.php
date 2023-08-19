<!DOCTYPE html>
<html>
<head>
  <title>Check Voting Eligibility</title>
</head>
<body>
  <form method="POST" action="">
    <label for="age">Enter your age:</label>
    <input type="number" name="age" id="age" required>
    <input type="submit" name="submit" value="Check Eligibility">
  </form>
</body>
</html>

<?php
if(isset($_POST['submit'])) {
    $age = $_POST['age'];

    if ($age > 18) {
        echo "You are eligible to vote.";
    } else {
        echo "You are not eligible to vote.";
    }
}
?>