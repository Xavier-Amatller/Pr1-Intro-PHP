<?php

echo "1. Se declaren dos variables con valores numéricos superiores a 10 y seguidamente: <br><br>";

$var1 = rand(11,30);
$var2 = rand(11,30);

echo "Variable 1 -> $var1 <br>";
echo "Variable 2 -> $var2 <br>";

echo "2. Muestra la progresión numérica de los números pares desde 0 hasta el valor de la
primera con un bucle for.<br><br>";

for ($i=0; $i <= $var1; $i+=2) { 
    echo "$i<br>";
}

echo "3. Muestra la progresión numérica desde la segunda variable hasta 0 con un bucle
while.<br><br>";


for ($i=$var2; $i >= 0; $i--) { 
    echo "$i<br>";
}
echo "4. Muestra la progresión numérica desde la primera variable a la segunda con un bucle
do/while.<br>
a. Si la segunda variable es más pequeña, sólo queremos que imprima una vez
el valor de la primera variable. <br><br>";
$aux = $var1;
do{
    echo "$aux<br>";
    $aux++;
}while($aux<=$var2);