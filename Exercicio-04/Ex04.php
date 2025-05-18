<?php

$letra = $_POST['letra'];

if($letra === 'a' || $letra === 'e' || $letra === 'i' || $letra === 'o' || $letra === 'u'){
    echo "Vogal";
}else{
    echo "Consoante";
}
?>