<?php

$numero = $_POST ["numero"];

$arredondando = round($numero);

if ($numero == $arredondando) {
    echo"$numero é INTEIRO.";
} else {
    echo"$numero é DECIMAL.";
}
?>