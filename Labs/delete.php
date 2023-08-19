<?php
$DBname = "schoolmanagement";
$con = mysqli_connect("localhost", "root", "");
$db = mysqli_select_db($con, $DBname);

if (isset($_GET['SRoll'])) {
    $rollNo = $_GET['SRoll'];
    
    $query = "DELETE FROM student WHERE SRoll='$rollNo'";
    $delete_row = $con->query($query) or die($con->error.__LINE__);
    
    header("Location: Lab12Q3.php");
    exit();
}
?>
