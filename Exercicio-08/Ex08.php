<?php

$valorUm = $_POST["numeroUm"];
$valorDois = $_POST["numeroDois"];
$valorTres = $_POST["numeroTres"];

if($valorUm < $valorDois && $valorUm < $valorTres){
    echo"Compre o primeiro produto pois é mais barato";
}else if($valorDois < $valorUm && $valorDois < $valorTres){
    echo"Compre o segundo produto pois e mais barato";
}else{
    echo"Compre o terceiro produto pois e mais barato";
}
