<html>

<body>
    <h2>Today's Special</h2>
    <p>
    <form method="get" action="Lab11Q4.php">
        <select name="day">
            <option value="1">Monday/Wednesday
            <option value="2">Tuesday/Thursday
            <option value="3">Friday/Sunday
            <option value="4">Saturday
        </select>
        <input type="submit" value="Send">
    </form>
</body>
</html>

<?php
$day = $_GET['day'];
$special = '';

switch ($day) {
    case 1:
        $special = 'Chicken';
        break;
    case 2:
        $special = 'Rice';
        break;
    case 3:
        $special = 'Potatoes and salad';
        break;
    default:
        $special = 'Fish';
}
?>

<h2>Today's special is:</h2>
<?php echo $special; ?>
