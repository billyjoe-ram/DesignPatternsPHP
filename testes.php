<?php

use Alura\DesignPattern\Orcamento;
use Alura\DesignPattern\CalculadoraImpostos;
use Alura\DesignPattern\Impostos\Icms;

require 'vendor/autoload.php';

$calculadora = new CalculadoraImpostos();

$orcamento = new Orcamento();
$orcamento->valor = 100;

echo $calculadora->calcula($orcamento, new Icms());
