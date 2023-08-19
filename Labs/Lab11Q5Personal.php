<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personal Info</title>
    <link rel='stylesheet' href='styles.css'>
</head>
<body>
<div class='sec main'>
    <table id='header'>
        <tr style="background-color: #0072BB; color:#fff">
            <th>Step I</th>
            <th>Step II</th>
            <th>Step III</th>
            <th>Step IV</th>
            <th>Step V</th>
            <th>Step VI</th>
            <th>Step VII</th>
        </tr>

        <tr style="background-color: #ADD8E6; color:black">
            <td> <a href="PersonalInfo.php">Personal Information</a></td>
            <td> <a href="AcademicRecord.php">Academic Record</a></td>
            <td> <a href="WorkExperience.php">Work Experience</a></td>
            <td> Teaching Experience</td>
            <td>Reference</td>
            <td>Applied For</td>
            <td>Application Preview</td>
        </tr>
    </table>

    <table id='head' class='btn'>
        <td>Name</td>
        <td>Email</td>
        <td>Student/Employment Status</td>
        <td>Date of Birth</td>
        <td>Country</td>
    </table>
    <br>

    <form action="PersonalInfo.php" method="GET">
        <table class='sec ac'>
            <tr>
                <td>Name</td>
                <td><input type="text" name="Name"> </td>
            </tr>
            <tr>
                <td>Email</td>
                <td><input type="email" name="Email"> </td>
            </tr>
            <tr>
                <td>Emp Status</td>
                <td><input type="text" name="EmpStatus"> </td>
            </tr>
            <tr>
                <td>Date of Birth</td>
                <td><input type="date" name="DOB"></select></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="Country"> </td>
            </tr>
        </table>
        <br>
    
        <div class='sec'>
            <button><a href=AcademicRecord.php><<< Academic Record</a></button>
            <button value="Add Record"> Add Record</button>
            <button><a href="WorkExperience.php">WorkExperience >>></a></button>
        </div>
    </form> 
    </div>
    <br>
    <?php
        if($_GET['Name'] && $_GET['Email'] && $_GET['EmpStatus'] && $_GET['DOB'] && $_GET['Country']) {
            echo "Your Personal Information: <br/>";
            echo "Name: ". $_GET['Name']. "<br/>";
            echo "Email: ". $_GET['Email']. "<br/>";
            echo "Employment Status: ". $_GET['EmpStatus']. "<br/>";
            echo "Date of Birth: ". $_GET['DOB']."<br/>";
            echo "Country: ". $_GET['Country'];
        }
    ?>
</body>
</html>