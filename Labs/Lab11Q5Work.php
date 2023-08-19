<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Work Experience</title>
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
        <td>Organization</td>
        <td>Position</td>
        <td>Salary</td>
        <td>Experience</td>
        <td>Country</td>
    </table>
    <br>

    <form action="WorkExperience.php" method="GET">
        <table class='sec ac'>
            <tr>
                <td>Organization</td>
                <td><input type="text" name="Organization"> </td>
            </tr>
            <tr>
                <td>Position</td>
                <td><input type="text" name="Position"> </td>
            </tr>
            <tr>
                <td>Salary</td>
                <td><input type="text" name="Salary"> </td>
            </tr>
            <tr>
                <td>Experience</td>
                <td><input type="number" name="Experience"></select></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="Country"> </td>
            </tr>
        </table>
        <br>
        <div class='sec'>
            <button><a href=AcademicRecord.php><<< Academic Record</a></button>
            <input type="submit" name="btnSubmit" value="Add Record">
            <button><a href="#">Teaching Experience >>></a></button>
        </div>
    </form> 
    </div>

    <br>
    <?php
        if($_GET['Organization'] && $_GET['Position'] && $_GET['Salary'] && $_GET['Experience'] && $_GET['Country']) {
            echo "Your Work Details are: <br/>";
            echo "Organization Name: ". $_GET['Organization']. "<br/>";
            echo "Position: ". $_GET['Position']. "<br/>";
            echo "Salary: ". $_GET['Salary']. "<br/>";
            echo "Experience: ". $_GET['Experience']. " years"."<br/>";
            echo "Country: ". $_GET['Country'];
        }
    ?>

</body>
</html>