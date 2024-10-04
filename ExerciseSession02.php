<?php
session_start();

if (!isset($_SESSION["array"])) {
    $_SESSION["array"] = [10, 20, 30];
}

if (isset($_GET["modify"])) {
    $_SESSION["array"][$_GET["position"]] = $_GET["nuevoValor"];
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2 Sesiones</title>
</head>

<body>
    <form action="" method="get">
        <h1>Modify array saved in session</h1>
        Position to Modify
        <select name="position">
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <br><br>
        New value: <input type="number" name="nuevoValor" value="0">
        <br><br>
        <input type="submit" name="modify" value="Modify">
        <input type="submit" name="average" value="Average">
        <input type="reset">
    </form>
    <br>
    Current Array <div style="display: inline;">
        <?php
        foreach ($_SESSION["array"] as $value)
            echo $value . ",";
        ?>
    </div>
    <br><br>

    <div>
        <?php
        if (isset($_GET["average"])) {
            echo "Average: " . array_sum($_SESSION["array"]) / count($_SESSION["array"]);
        }
        ?>
    </div>
</body>

</html>