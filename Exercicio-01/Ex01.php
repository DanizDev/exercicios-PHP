<?php

$numeroUm = $_POST["numeroUm"];
$numeroDois = $_POST["numeroDois"];

if($numeroUm > $numeroDois){
    echo "O numero um e maior";
}else if($numeroDois > $numeroUm){
    echo "Os numeros dois e maior";
}else{
    echo "Os numeros sao iguais";
}

?>