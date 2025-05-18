<?php

$salario = $_POST["salario"];

$numeroAumento20 = ($salario * 20) / 100;
$numeroAumento15 = ($salario * 15) / 100;
$numeroAumento10 = ($salario * 10) / 100;
$numeroAumento05 = ($salario *  5) / 100;

$reajuste20 = $salario + $numeroAumento20;
$reajuste15 = $salario + $numeroAumento15;
$reajuste10 = $salario + $numeroAumento10;
$reajuste05 = $salario + $numeroAumento05;

if ($salario <= 280.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 20% 
        O valor do aumento foi de R$ + $numeroAumento20 \n
        Novo salario: R$ $reajuste20";
} else if ($salario >= 280.00 && $salario < 700.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 15% 
        O valor do aumento foi de R$ + $numeroAumento15 \n
        Novo salario: R$ $reajuste15";
} else if ($salario >= 700.00 && $salario < 1500.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 10% 
        O valor do aumento foi de R$ + $numeroAumento10 \n
        Novo salario: R$ $reajuste10";
} else if ($salario > 1500.00) {
    echo "Sálario antes do reajuste: R$  $salario \n
        porcentual do aumento foi de 5% 
        O valor do aumento foi de R$ + $numeroAumento05 \n
        Novo salario: R$ $reajuste05";
} else {
    echo "Informe um sálario válido";
}
?>