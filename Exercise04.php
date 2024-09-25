<?php
echo "1. Genere un número aleatorio entre el 1 y el 6 para simular la Ɵrada de un dado.
<br><br>";
$tirada_dado = rand(1,6);
echo "Tirada dado --> $tirada_dado <br><br>";

echo "2. Muestra en números y letras el valor obtenido y valor que tendrá el dado en la cara
opuesta. (1:5, 2:6, 3:4) <br><br>";

switch ($tirada_dado) {
    case '1':
        echo "Ha salido el numero uno, el numero contrario es el 6";
        break;
        case '2':
            echo "Ha salido el numero dos, el numero contrario es el 5";
            break;
            case '3':
                echo "Ha salido el numero tres, el numero contrario es el 4";
                break;
                case '4':
                    echo "Ha salido el numero cuatro, el numero contrario es el 3";
                    break;
                    case '5':
                        echo "Ha salido el numero cinco, el numero contrario es el 2";
                        break;
                        case '6':
                            echo "Ha salido el numero seis, el numero contrario es el 1";
                            break;
}