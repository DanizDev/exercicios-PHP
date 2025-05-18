<?php

$diaSemana = $_POST ["diaSemana"];

if($diaSemana == "1"){
    echo"Segunda";
}else if ($diaSemana == "2"){
    echo"Terça";
}else if ($diaSemana == "3"){
    echo"Quarta";
}else if ($diaSemana == "4"){
    echo"Quinta";
}else if ($diaSemana == "5"){
    echo"Sexta";
}else if ($diaSemana == "6"){
    echo"Sabado";
}else if ($diaSemana == "7"){
    echo"Domingo";
}
?>