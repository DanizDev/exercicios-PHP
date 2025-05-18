<?php

$numero1 = $_POST["valor1"];
$numero2 = $_POST["valor2"];
$operacao = $_POST["op"];

if ($operacao === "A") {

    if ($numero1 % 2 == 0) {
        echo "O número $numero1 é pa <br>";
    } else {
        echo "O número $numero1 é ímpar <br>";
    }

    if ($numero2 % 2 == 0) {
        echo "O número $numero2 par <br>";
    } else {
        echo "O número $numero2  ímpar <br>";
    }
} elseif ($operacao === "B") {

    if ($numero1 >= 0) {
        echo "O número $numero1 positivo <br>";
    } else {
        echo "O número $numero1 negativo <br>";
    }

    if ($numero2 >= 0) {
        echo "O número $numero2 positivo <br>";
    } else {
        echo "O número $numero2 negativo <br>";
    }
} elseif ($operacao === "C") {

    if (floor($numero1) == $numero1) {
        echo "O número $numero1 inteiro <br>";
    } else {
        echo "O número $numero1 decimal <br>";
    }

    if (floor($numero2) == $numero2) {
        echo "O número $numero2 inteiro <br>";
    } else {
        echo "O número $numero2 decimal <br>";
    }
} else {
    echo "operação inválida.";
}
?>