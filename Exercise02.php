<?php
echo "1. Se declara una variable con un valor numérico. UƟlizando una estructura switch/case
genera un mensaje que indique a qué día de la semana se corresponde.
a. En caso de que no sea un valor entre el 1 y el 7 indica que no se corresponde
con ningún día.<br> ";

$var = rand(1, 10);
echo "Valor -> $var <br>";
switch ($var) {
    case '1':
        echo "Es lunes.";
        break;
    case '2':
        echo "Es martes.";
        break;
    case '3':
        echo "Es miercoles.";
        break;
    case '4':
        echo "Es jueves.";
        break;
    case '5':
        echo "Es viernes.";
        break;
    case '6':
        echo "Es sabado.";
        break;
    case '7':
        echo "Es domingo.";
        break;

    default:
        echo "No es un numero del 1 al 7";
        break;
}
