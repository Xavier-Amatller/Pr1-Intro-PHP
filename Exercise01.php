<?php

echo"<br>
1. Declare dos variables numéricas, las sume, reste, dividí y muestre los valores de las
variables y los resultados de sus operaciones.<br>
";

$val1 = rand(1,10);
$val2 = rand(1,10);
echo "Valor 1 -> $val1<br>";
echo "Valor 2 -> $val2<br>";

echo "<br>"."La suma de $val1 y $val2 es ->". ($val1+$val2)."<br>";
echo "La resta de $val1 y $val2 es ->". ($val1-$val2)."<br>";
echo "La multiplicacion de $val1 y $val2 es ->". ($val1*$val2)."<br>";
echo "La division de $val1 y $val2 es ->". ($val1/$val2)."<br>";

echo "<br>2. Muestra cuál es mayor, cuál menor o si son iguales.<br>";
if($val1>$val2){
    echo "$val1 es mayor a $val2 <br>";
}elseif($val2>$val1){
    echo "$val2 es mayor a $val1 <br>";
}else{
    echo "Ambos valores son Iguales <br>";
}

echo"<br>3. Si las dos variables son valores superiores a 1,<br>
a. calcula el área del triángulo con base y altura igual a los valores de las
variables. <br>";

if($val1 > 1 && $val2 > 1){
    echo "El Area del triangulo es " . ($val1*$val2)/2 . "<br>";
}