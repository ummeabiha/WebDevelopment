<?php
$DBname="schoolmanagement";
$con=mysqli_connect("localhost","root","");
$db=mysqli_select_db($con,$DBname);
$query="SELECT * FROM student";
$result=$con->query($query) or die($con->error._LINE_);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        body{
        display:flex;
        flex-direction:column;
        align-items:center;
        justify-content:center;
        
    }
    table{
        cellspacing:10px;
        cellpadding:10px;
        background:grey;
    }
 td{
        cellspacing:20px;
        cellpadding:20px;
        background-color:white;
        color:black;
    
    }
    </style>
   
</head>
<body>
    <table>
        <tr ><td colspan=6><h2>School Management System</h2></td></tr>
         <tr>
            <td>SId</td>
            <td>Name</td>
            <td>Roll no</td>
            <td>Class</td>
            <td colspan=2>Operations</td>
        </tr>
        <?php
          
        while($row=mysqli_fetch_assoc($result))
        {
        echo
        "<tr>
            <td>". $row['SId']."</td>
            <td>". $row['SName']."</td>
            <td>". $row['SRoll']."</td>
            <td>". $row['SClass']."</td>
            <td><a href='delete.php?SRoll=$row[SRoll]' onclick='return checkdelete()'>Delete</td>
            <td><a href='update.php?SRoll=$row[SRoll]&SName=$row[SName]
            &SClass=$row[SClass]'>Update</td>
        </tr>";
        
        }
        ?>
    </table>
              <script>
               function checkdelete(){
                  return confirm("are you sure u want to delete that record?");}
               </script>   
</body>
</html>
