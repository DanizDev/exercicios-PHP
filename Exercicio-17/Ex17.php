<?php

$ano = $_POST ["ano"];

if ($ano %4 == 0){
    echo"O ano $ano é bissexto";
}
else{
    echo"O ano $ano não é bissexto";
}

?>