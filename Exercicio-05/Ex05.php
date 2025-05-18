<?php

$primeiraNota = $_POST["notaUm"];
$segundaNota = $_POST["notaDois"];
$media = ($primeiraNota + $segundaNota) / 2;

if($media === 10){
    echo "Aprovado com distinção";
}else if($media > 7){
    echo"Aprovado";
}else if($media < 7){
    echo "Reprovado";
}

























?>