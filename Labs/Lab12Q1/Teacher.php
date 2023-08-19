<?php
$con=mysqli_connect("localhost","root"."");
$db='schoolmanagement';
mysqli_select_db($con,$db);

if(isset($_POST['submit'])){
    $Tid= $_POST['Tid'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $salary = $_POST['salary'];
    $deptid = $_POST['deptid'];
    
    $query="INSERT INTO `teacher`(TId,TName,TDesg,TSalary,DId) VALUES('$Tid','$name','$designation','$salary','$deptid')";
    $insert_row=$con->query($query) or die($con->error.__LINE__);
   
    $msg='Teacherinfo has been added';
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
        <h2>ADD TEACHER INFO</h2>
    <?php
        if(isset($msg)){
        echo '<p>'.$msg.'</p>';}?>
    <form method="post" action="Teacher.php">
        <p>
            <label>Teacher ID</label>
            <input type="number" name='Tid'/>
        </p>
        <p>
        <label>Teacher Name</label>
            <input type="text" name="name"/> 
        </p>
        <p>
            <label>Designation</label>
            <input type="text" name="designation"/>
        </p>
        <p>
            <label>Salary</label>
            <input type="number" name="salary"/>
        </p>
        <p>
            <label>Dept ID</label>
            <input type="number" name="deptid"/>
        </p>
        <p>
            <input type="submit" name="submit" value="Submit"/>
        </p>

    </div>  
</body>
</html>
