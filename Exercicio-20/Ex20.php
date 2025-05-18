<?php

$nota1 = $_POST["nota1"];
$nota2 = $_POST["nota2"];
$nota3 = $_POST["nota3"];
$media = ($nota1 + $nota2 + $nota3) / 3;

if ($media == 10) {
    echo "Sua média foi $media, APROVADO COM DISTINÇÃO";

} else if ($media >= 7) {
    echo "Sua média foi $media, APROVADO";

} else if ($media <= 7){
    echo "Sua média foi $media, REPROVADO";
}
?>