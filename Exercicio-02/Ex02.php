<?php

$numero = $_POST["numero"];

if($numero > 0){
    echo "O numero e positivo";
}else if($numero < 0){
    echo "O numero e negativo";
}else{
    echo "O numero e neutro";
}

?>