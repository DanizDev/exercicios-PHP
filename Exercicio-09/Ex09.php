<?php

$numeroUm = $_POST["numeroUm"];
$numeroDois = $_POST["numeroDois"];
$numeroTres = $_POST["numeroTres"];

if($numeroUm > $numeroDois && $numeroUm > $numeroTres && $numeroDois > $numeroTres){
    echo"A ordem é: $numeroUm, $numeroDois, $numeroTres";
}else if($numeroUm > $numeroDois && $numeroUm > $numeroTres && $numeroTres > $numeroDois){
    echo"A ordem é: $numeroUm, $numeroTres, $numeroDois";
}else if($numeroDois > $numeroUm && $numeroDois > $numeroTres && $numeroUm > $numeroTres){
    echo"A ordem é: $numeroDois, $numeroUm, $numeroTres";
}else if($numeroDois > $numeroUm && $numeroDois > $numeroTres && $numeroTres > $numeroUm){
    echo"A ordem é: $numeroDois, $numeroTres, $numeroUm";
}else if($numeroTres > $numeroUm && $numeroTres > $numeroDois && $numeroUm > $numeroDois){
    echo"A ordem é: $numeroTres, $numeroUm, $numeroDois";
}else{
    echo"A ordem é: $numeroTres, $numeroDois, $numeroUm";
}


?>