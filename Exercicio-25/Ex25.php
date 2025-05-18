<?php

$telefonouVitima = $_POST["telefone"];
$esteveLocal = $_POST["esteve"];
$moraPerto = $_POST["mora"];
$deviaVitima = $_POST["devia"];
$trabalhouVitima = $_POST["trabalho"];

$somaRespostas = 0;

if ($telefonouVitima == "sim") $somaRespostas++;
if ($esteveLocal == "sim") $somaRespostas++;
if ($moraPerto == "sim") $somaRespostas++;
if ($deviaVitima == "sim") $somaRespostas++;
if ($trabalhouVitima == "sim") $somaRespostas++;

if ($somaRespostas == 2) {
    $classificacao = "Suspeita";
} else if ($somaRespostas >= 3 && $somaRespostas <= 4) {
    $classificacao = "Cúmplice";
} else if ($somaRespostas == 5) {
    $classificacao = "Assassino";
} else {
    $classificacao = "Inocente";
}

echo "Classificação: $classificacao";

?>