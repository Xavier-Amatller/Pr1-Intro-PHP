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

if (isset($_POST["lastWorkerOnModify"])) {


}
?>
<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciseSession01</title>
</head>

<body>
    <form action="./" method="post"></form>
    <h1>SUPERMARKET MANAGEMENT</h1>
    worker name <input type="text" name="lastWorkerOnModify"><br>
    <h2>Choose product</h2>
    <select name="product" id="product">
        <option value="milk">milk</option>
        <option value="softDrink">softDrink</option>
    </select>
    <h2>Product quantity</h2>
    <input type="text">
    <input type="submit" name="add" id="add" value="add">
    <input type="submit" name="remove" id="remove" value="remove">
    <input type="reset" value="reset">
    <h2>Inventary</h2>
    worker: <div class="worker"></div>
    units milk: <div class="unitsMilk"></div>
    units soft drink: <div class="unitsSoftDrink"></div>

</body>

</html>