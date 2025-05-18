<?php

$valorA = $_POST["valor1"];
$valorB = $_POST["valor2"];
$valorC = $_POST["valor3"];
$delta = $valorA * 2 + $valorB * +$valorC;


if ($valorA  == 0) {
    echo "A equação não é do segundo grau";
} else if ($delta == 0) {
    echo "possui apenas uma raiz real";
} else if ($delta > 0) {
    echo "possui duas raízes reais";
} else {
    echo "não possui raízes reais";
}
?>