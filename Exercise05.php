<?php
echo "1. Se genere un número aleatorio entre 0 y 20 y se muestre por pantalla.
<br><br>";

$var1 = rand(0, 20);
echo "$var1<br><br>";

echo "2. Se repita la operación hasta que el total de valores sumados sea superior a 100.
<br><br>";

$suma = $var1;
$nPares = 0;
$nImpares = 0;
while ($suma < 100) {
    $valorASumar = rand(0, 20);
    $valorASumar % 2 == 0 ? $nPares++ : $nImpares++;
    echo "nuevo valor aleatorio: $valorASumar <br>";
    $suma += $valorASumar;
}
echo "<br>";

echo "3. Muestra la suma de los valores generados.
<br><br>";

echo "$suma <br> <br>";

echo "4. Muestra el total de números pares e impares generados. 
<br><br>";

echo "Cantidad de numeros pares --> $nPares <br>";
echo "Cantidad de numeros impares --> $nImpares <br>";
