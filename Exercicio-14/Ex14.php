<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$media = ($nota1 + $nota2) / 2;

if ($media <= 10 && $media >= 9.0) {
    echo "Sua média foi $media, Nota A, você está aprovado";
} else if ($media >= 7.5 && $media <= 9.0) {
    echo "Sua média foi $media, Nota B, você está aprovado";
} else if ($media >= 6.0 && $media <= 7.5) {
    echo "Sua média foi $media, Nota C, você está aprovado";
} else if ($media >= 4.0 && $media <= 6.0) {
    echo "Sua média foi $media, Nota D, você está reprovado";
} else if ($media <= 4.0 && $media >= 0) {
    echo "Sua média foi $media, Nota E, você está reprovado";
} else {
    echo "Digite uma nota válida para fazer o calculo da média";
}
?>