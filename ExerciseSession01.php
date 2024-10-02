<?php

session_start();

echo "<h1>Crea un formulario que permita gestionar la cantidad de refresco o leche que hay en un
supermercado.</h1><br><br>";

echo "a) Se debe mantener el nombre del trabajador que está utilizando la aplicación.
<br><br>";

echo "b) Se debe poder añadir y quitar leche o refresco seleccionando de una lista

<br><br>";
echo "c) Se debe controlar que no se pueden quitar mas unidades de las que haya, en ese
caso mostrar error.
<br><br>";
$_SESSION["error"] = "";

if (isset($_POST["worker"]) && isset($_POST["productQuantity"])) {
 
    isset($_SESSION["unitsMilk"]) ? $unitsMilk = $_SESSION["unitsMilk"] : $unitsMilk = 0;
    isset($_SESSION["unitsSoftDrink"]) ? $unitsSoftDrink = $_SESSION["unitsSoftDrink"] : $unitsSoftDrink = 0;
    $product = $_POST["product"];
    $productQuantity = $_POST["productQuantity"];

    $_SESSION["lastWorkerOnModify"] = $_POST["worker"];

    switch ($_POST["changeOnInventory"]) {
        case 'add':
            switch ($product) {
                case 'milk':
                    $unitsMilk += $productQuantity;
                    break;

                case 'softDrink':
                    $unitsSoftDrink += $productQuantity;
                    break;
            }
            break;

        case 'remove':
            switch ($product) {
                case 'milk':
                    $unitsMilk - $productQuantity >= 0 ? $unitsMilk -= $productQuantity : $_SESSION["error"] = "Estas intentando borrar mas milk de la que hay";
                    break;

                case 'softDrink':
                    $unitsSoftDrink - $productQuantity >= 0 ? $unitsSoftDrink -= $productQuantity : $_SESSION["error"] =  "Estas intentando borrar mas softDrink de la que hay";
                    break;
            }
    }
    $_SESSION["unitsMilk"] = $unitsMilk;
    $_SESSION["unitsSoftDrink"] = $unitsSoftDrink;
}else{
    $_SESSION["error"] = "Rellena todos los campos";
}

?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciseSession01</title>
</head>

<body>
    <form action="" method="post">
        <h1>SUPERMARKET MANAGEMENT</h1>
        worker name <input type="text" name="worker" required><br>
        <h2>Choose product</h2>
        <select name="product" id="product">
            <option value="milk">milk</option>
            <option value="softDrink">softDrink</option>
        </select>
        <h2>Product quantity</h2>
        <input type="number" name="productQuantity" required>
        <input type="submit" name="changeOnInventory" id="add" value="add">
        <input type="submit" name="changeOnInventory" id="remove" value="remove">
        <input type="reset" value="reset">
        <h2>Inventary</h2>
        worker: <div class="worker">
            <?php
            if (isset($_SESSION["lastWorkerOnModify"])) {
                echo $_SESSION["lastWorkerOnModify"];
            }
            ?>
        </div>
        units milk: <div class="unitsMilk">
            <?php
            if (isset($_SESSION["unitsMilk"])) {
                echo $_SESSION["unitsMilk"];
            }
            ?>
        </div>
        units soft drink: <div class="unitsSoftDrink">
            <?php
            if (isset($_SESSION["unitsSoftDrink"])) {
                echo $_SESSION["unitsSoftDrink"];
            }
            ?>
        </div>
        <?php echo $_SESSION["error"] ?>
    </form>
</body>

</html>