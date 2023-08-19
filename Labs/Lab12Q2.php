<?php
$con=mysqli_connect("localhost","root"."");
$db='schoolmanagement';
mysqli_select_db($con,$db);

if(isset($_POST['submit'])){
    $studentname= $_POST['studentname'];
    $rollno = $_POST['rollno'];
    $class = $_POST['class'];    
    $query="INSERT INTO `student`(SId, SName,SRoll,SClass) 
    VALUES('$studentname','$rollno','$class')";
    $insert_row=$con->query($query) or die($con->error.__LINE__);
    $msg='Teacherinfo has been added';
}
?>


<!DOCTYPE html>
<html lang="en">
<head><title>Document</title>
<link rel="stylesheet" href="./Lab12Q1/style.css" type="text/css"></link>
</head>
<body>
    <div class="container">
        <h1>SCHOOL REGISTERATION SYSTEM</h1>
        <h2>ADD STUDENT INFO</h2>
        <?php
            if(isset($msg)){
            echo '<p>'.$msg.'</p>';}?>
            <form method="post" action="Lab12Q2.php">
            <p><label>Student's Name</label><input type="text" name='studentname'/></p>
            <p><label>Roll no</label><input type="number" name="rollno"/></p>
            <p><label>Class</label><input type="text" name="class"/></p>
            <p><input type="submit" name="submit" value="Submit"/></p>

            <table id="table" cellspacing="0" cellpadding="5" border="1px solid black">
                <tr>
                    <th>Student Name</th>
                    <th>Roll no</th>
                    <th>Class</th>
                </tr>
                <tr>
                <?php
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $studentname= $_POST['studentname'];
                    $rollno = $_POST['rollno'];
                    $class = $_POST['class'];

                    echo "<th>".$studentname."</th>";
                    echo "<th>".$rollno."</th>";
                    echo "<th>".$class."</th>";
                }
                ?> 
                </tr>
            </table>
    </div> 
</body>
</html>
