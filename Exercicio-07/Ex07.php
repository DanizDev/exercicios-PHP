<?php

$numeroUm = $_POST["numeroUm"];
$numeroDois = $_POST["numeroDois"];
$numeroTres = $_POST["numeroTres"];

if($numeroUm > $numeroDois && $numeroUm > $numeroTres){
    echo"O numero um é o maior <br>";
}else if($numeroDois > $numeroUm && $numeroDois > $numeroTres){
    echo"O numero dois é o maior<br>";
}else{
    echo"O numero tres é o maior<br>";
}

if($numeroUm < $numeroDois && $numeroUm < $numeroTres){
    echo"O numero um é o menor<br>";
}else if($numeroDois < $numeroUm && $numeroDois < $numeroTres){
    echo"O numero dois é o menor<br>";
}else{
    echo"O numero tres é o menor<br>";
}



?>