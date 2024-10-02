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

if (isset($_POST["worker"])) {

    $_SESSION["lastWorkerOnModify"] = $_POST["worker"];

    switch ($_POST["changeOnInventory"]) {
        case 'add':
            switch ($_POST["product"]) {
                case 'milk':
                    isset($_SESSION["unitsMilk"]) ? $_SESSION["unitsMilk"] += $_POST["productQuantity"] : $_SESSION["unitsMilk"] = $_POST["productQuantity"];
                    break;

                case 'softDrink':
                    isset($_SESSION["unitsSoftDrink"]) ? $_SESSION["unitsSoftDrink"] += $_POST["productQuantity"] : $_SESSION["unitsSoftDrink"] = $_POST["productQuantity"];
                    break;
            }
            break;

        case 'remove':
            switch ($_POST["product"]) {
                case 'milk':
                    if (isset($_SESSION["unitsMilk"])) {
                        if ($_SESSION["unitsMilk"] - $_POST["productQuantity"] >= 0) {
                            $_SESSION["unitsMilk"] -= $_POST["productQuantity"];
                        } else {
                            $_SESSION["error"] = "Estas intentando borrar mas milk de la que hay";
                        };
                    } else {
                        $_SESSION["unitsMilk"] = 0;
                    };
                    break;

                case 'softDrink':
                    if (isset($_SESSION["unitsSoftDrink"])) {
                        if ($_SESSION["unitsSoftDrink"] - $_POST["productQuantity"] >= 0) {
                            $_SESSION["unitsSoftDrink"] -= $_POST["productQuantity"];
                        } else {
                            $_SESSION["error"] =  "Estas intentando borrar mas softDrink de la que hay";
                        };
                    } else {
                        $_SESSION["unitsSoftDrink"] = 0;
                    };
            }
            break;
    }
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
        worker name <input type="text" name="worker"><br>
        <h2>Choose product</h2>
        <select name="product" id="product">
            <option value="milk">milk</option>
            <option value="softDrink">softDrink</option>
        </select>
        <h2>Product quantity</h2>
        <input type="number" name="productQuantity">
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
                echo $_SESSION["unitsMilk"] ;
            }
            ?>
        </div>
        units soft drink: <div class="unitsSoftDrink">
            <?php
            if (isset($_SESSION["unitsSoftDrink"])) {
                echo $_SESSION["unitsSoftDrink"] ;
            }
            ?>
        </div>
        <?php  echo $_SESSION["error"]?>
    </form>
</body>

</html>