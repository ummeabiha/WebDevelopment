<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pizza Topping Selector</title>
</head>

<body>
    <form action="Lab11Q1" method="post">
        <h1>Pizza Topping Selector</h1>
        <p>Select your favourite pizza topping</p>
        <input type="checkbox" name="PizzaFlavour[]" value="The Euro">The Euro<br>
        <input type="checkbox" name="PizzaFlavour[]" value="Fajita Sicilian">Fajita Sicilian <br>
        <input type="checkbox" name="PizzaFlavour[]" value="Chicken Tikka">Chicken Tikka <br>
        <input type="checkbox" name="PizzaFlavour[]" value="Chicken Fajita">Chicken Fajita <br>
        <input type="checkbox" name="PizzaFlavour[]" value="HotSpicy">Hot&Spicy <br>
        <input type="submit" name="btnSubmit" value="Submit">
    </form>

    <h1>Pizza Topping Selector</h1>
    You selected the following flavours: <br>

    <?php
        if (isset($_POST['btnSubmit'])){
            if( isset($_POST['PizzaFlavour'])){
                foreach($_POST['PizzaFlavour'] as $value){
                    echo "$value<br>";
                }
            }
        }
    ?>
</body>
</html> 