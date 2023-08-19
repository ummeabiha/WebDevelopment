<?php
$con=mysqli_connect("localhost","root"."");
$db='schoolmanagement';
mysqli_select_db($con,$db);

if(isset($_POST['submit'])){
    $deptid = $_POST['deptid'];
    $dname = $_POST['dname'];
         
   $query="INSERT INTO `dept`(DId,DName) VALUES('$deptid','$dname')";
   $insert_row=$con->query($query) or die($con->error._LINE_);

    $msg='Dept has been added';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Document</title>
<link rel="stylesheet" href="style.css" type="text/css"></link>
</head>
<body>
    <div class="container">
        <h1>SCHOOL MANAGEMENT SYSTEM</h1>
        <h2>ADD DEPARTMENT INFO</h2>

        <?php
            if(isset($msg)){
            echo '<p>'.$msg.'</p>';}?>
        <form method="post" action="Dept.php">
            <p>
                <label>Dept ID</label>
                <input type="number" name="deptid"/>
            </p>
            <p>
                <label>Dept Name</label>
                <input type="text" name="dname"/>
            </p>
            <p>
                <input type="submit" name="submit" value="Submit"/>
            </p>
    </div> 
</body>
</html>
