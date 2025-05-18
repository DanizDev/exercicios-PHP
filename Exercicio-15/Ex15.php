<?php
$lado1 = $_POST["lado1"];
$lado2 = $_POST["lado2"];
$lado3 = $_POST["lado3"];


if ($lado1 == $lado2 && $lado1 == $lado3) {
    echo "Equilátero";
} else if ($lado1 == $lado2 && $lado1 != $lado3 || $lado1 == $lado3 && $lado1 != $lado2 || $lado2 ==  $lado3 && $lado2 != $lado1) {
    echo "Isósceles";
} else {
    echo "Escaleno";
}
?>