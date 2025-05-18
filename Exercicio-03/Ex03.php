<?php

$letra = $_POST["primeiraLetra"];

if($letra === 'F' || $letra === 'f'){
    echo"Feminino";
}else if($letra === 'M' || $letra === 'm'){
    echo"Masculino";
}else{
    echo "Sexo inválido";
}











?>