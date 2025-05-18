<?php

$letra = $_POST["primeiraLetra"];

if($letra === 'M' || $letra === 'm'){
    echo"Matutino";
}else if($letra === 'V' || $letra === 'v'){
    echo"Vespertino";
}else if($letra === 'N' || $letra === 'n'){
    echo "Noturno";
}











?>