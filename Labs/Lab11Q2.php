<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <form action="Lab11Q2.php" method="POST">
            Number 1: <input  name="num1" type="number"><br>
            Number 2: <input  name="num2" type="number"><br>
            Selet Operation: <br>
            <input type="radio" name="opr" value="+">Addition<br>
            <input type="radio" name="opr" value="-">Subtraction<br>
            <input type="radio" name="opr" value="*">Multiplication<br>
            <input type="radio" name="opr" value="/">Division<br>
            <input type="submit" name="submit" value="Submit">
    </form>

    <?php   
        $a = $_POST["num1"];
        $b = $_POST["num2"];
        $operator=$_POST["opr"];

    echo  nl2br("\nPerforming Arthemetic With Operator Selection.\nYou have entered:\n$a as number 1\n$b as number 2\nYou have selected the following operator '$operator'\n");
    echo "Result: $a $operator $b = ";
    switch($operator){
        case '+':
            echo $a+$b;
            break;
        case '-':
            echo $a-$b;
            break;
        case '*':
            echo $a*$b;
            break;
        case '/':
            echo $a/$b;
            break;
        default:
            echo 'Invalid Input';
    }
    ?>
</body>
</html>