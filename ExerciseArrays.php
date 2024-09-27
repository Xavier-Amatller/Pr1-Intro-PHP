<?php
echo "1) Crea un array asociaƟvo con los siguientes datos y claves.
nombre: Sara, apellido: Marơnez, edad: 23, ciudad: Barcelona.
Muestra los valores del array anterior uƟlizando foreach. <br><br>";

$array = [
    "nombre" => "Sara",
    "apellido" => "Maronez",
    "edad" => "23",
    "ciudad" => "Barcelona",
];
$i = 0;
foreach ($array as $value) {
    $i++;
    echo "dato $i " . $value . "<br>";
}
echo "<br>";

echo "2) Muestra los valores del array del ejercicio 1 mostrando la clave y el valor uƟlizando
foreach. 
<br><br>";

foreach ($array as $key => $value) {
    echo "" . $key . ": " . $value . "<br>";
}

echo "<br>";

echo "3) Modifica la edad del primer array a 24. Vuelve a mostrar toda su información.<br><br>";

$array["edad"] = "24";
foreach ($array as $key => $value) {
    echo "" . $key . ": " . $value . "<br>";
}

echo "4) Borra la ciudad del array y vuelve a mostrar toda su información usando la función
var_dump. 
<br><br>";

unset($array["ciudad"]);
var_dump($array);

echo "<br><br>";

echo "5) Crear un nuevo array con un valor separado por coma a parƟr de la cadena de texto
\$letters = “a,b,c,d,e,f”. Usando la función explode. Muestra su
información en orden descendente<br><br>";

$letters = "a,b,c,d,e,f";
$array = explode(",", $letters);

arsort($array);

foreach ($array as $value) {
    echo "" . $value . "<br>";
}
echo "<br>";

echo "6) Un profesor quiere registrar las notas de su clase en un array asociaƟvo. Las notas son
las siguientes:
Miguel: 5, Luís: 7, Marta: 10, Isabel: 8, Aitor: 4, Pepe: 1
Guarda los datos en un array asociaƟvo en el orden previo y muéstralos ordenados de
mayor a menor.
<br><br>";

$array = [
    "Miguel" => "5",
    "Luis" => "7",
    "Marta" => "10",
    "Isabel" => "8",
    "Aitor" => "4",
    "Pepe" => "1"
];
arsort($array);

foreach ($array as $key => $value) {
    echo "" . $key . " " . $value . "<br>";
}

echo "7) Calcula la media de las notas y muéstrala con solo 2 decimales. Además, muestra los
nombres de los alumnos cuya nota esté por encima de la media. 
<br><br>";

echo "La media es: " . round((array_sum($array) / count($array)), 2) . "<br><br>   ";

echo "8) Busca en el array la nota más alta (debe hacerse mediante código). Muestra la nota y
el nombre del mejor alumno de la clase. Deberá funcionar para cualquier valor del
array. 
<br><br>";

$notaAlta = max($array);

echo "Nota mas alta -> " . $notaAlta . "<br>";
echo "Alumno esrtella -> " . array_search($notaAlta, $array) . "";
