<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Academic Record</title>
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
        <td>Educational Qualification</td>
        <td>Specialization</td>
        <td>Per/CGPA</td>
        <td>Year of Passing</td>
        <td>Institution/University</td>
        <td>Country</td>
    </table>
    <br>

    <form action="AcademicRecord.php" method="GET">
        <table  class='sec ac'>
            <tr>
                <td>Educational Qualification</td>
                <td><select name="Education">
                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                    <option value="Master's Degree">Master's Degree</option>
                    <option value="Doctor of Philosophy PhD">Doctor of Philosophy PhD</option>
                    </select> 
                </td>
            </tr>
            <tr>
                <td>Specialization</td>
                <td><input type="text" name="Specialization"> </td>
            </tr>
            <tr>
                <td>Percentage/CGPA</td>
                <td><input type="text" name="CGPA"> </td>
            </tr>
            <tr>
                <td>Institution/Campus/University </td>
                <td><input type="text" name="Inst"> </td>
            </tr>
            <tr>
                <td>Year of Passing</td>
                <td><input type="number" name="Year"></select></td>
            </tr>
            <tr>
                <td>Country</td>
                <td><input type="text" name="Country"> </td>
            </tr>
        </table>
        <br>
        <div class='sec'>
            <button><a href=PersonalInfo.php><<< Personal Information</a></button>
            <button value="Add Record"> Add Record</button>
            <button><a href="WorkExperience.php">Work Experience >>></a></button>
        </div>
    </form> 
    </div>
    <br>
    <?php
        if($_GET['Specialization'] && $_GET['CGPA'] && $_GET['Inst'] && $_GET['Year'] && $_GET['Country']) {
            echo "Your Academic Record: <br/>";
            echo "Specialization: ". $_GET['Specialization']. "<br/>";
            echo "Percentage/CGPA: ". $_GET['CGPA']. "<br/>";
            echo "Institution/Campus/University: ". $_GET['Inst']. "<br/>";
            echo "Year: ". $_GET['Year']."<br/>";
            echo "Country: ". $_GET['Country'];
        }
    ?>

</body>
</html>