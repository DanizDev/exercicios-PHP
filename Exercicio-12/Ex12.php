<?php
$valorHoras = $_POST ["valorHoras"];
$horasTrabalhadas = $_POST ["horasTrabalhadas"];
$salarioBruto = $valorHoras * $horasTrabalhadas;

$sindicato = $salarioBruto * 0.03;
$FGTS = $salarioBruto * 0.08;

$imposto1 = $salarioBruto * 0.075;
$imposto2 = $salarioBruto * 0.15;
$imposto3 = $salarioBruto * 0.224;

$salario1 = $salarioBruto - ($impostoRenda1 + $sindicato + $FGTS);
$salario2 = $salarioBruto - ($impostoRenda2 + $sindicato + $FGTS);
$salario3 = $salarioBruto - ($impostoRenda3 + $sindicato + $FGTS);

if($salarioBruto < 1500){
   echo "Seu salario é de R$ $salarioBruto <br> 
   O desconto do imposto de renda é R$ $imposto1 <br> 
   O desconto do sindicato é de $sindicato <br>
   O desconto do FGTS é de R$ $FGTS <br> 
   O sálario atual é de R$ $salario1";

}else if($salarioBruto > 1500 && $salarioBruto < 2500){
    echo "Seu salario é de R$ $salarioBruto <br> 
   O desconto do imposto de renda é R$ $imposto2 <br> 
   O desconto do sindicato é de $sindicato <br>
   O desconto do FGTS é de R$ $FGTS <br> 
   O sálario atual é de R$ $salario2";
}else if($salarioBruto > 2500){
    echo "Seu salario é de R$ $salarioBruto <br> 
   O desconto do imposto de renda é R$ $imposto3 <br> 
   O desconto do sindicato é de $sindicato <br>
   O desconto do FGTS é de R$ $FGTS <br> 
   O sálario atual é de R$ $salario3";

}else if($salarioBruto < 2259.20){
    echo"Você está isento ";
}
?>