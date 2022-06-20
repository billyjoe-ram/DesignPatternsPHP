<?php

use Alura\DesignPattern\CalculadoraDescontos;
use Alura\DesignPattern\Orcamento;
// use Alura\DesignPattern\CalculadoraImpostos;
// use Alura\DesignPattern\Impostos\Icms;

require 'vendor/autoload.php';

// $calculadora = new CalculadoraImpostos();

// $orcamento = new Orcamento();
// $orcamento->valor = 100;

// echo $calculadora->calcula($orcamento, new Icms());

$calculadora = new CalculadoraDescontos();

$orcamento = new Orcamento();

$itensOrcamento = [];

for ($i=0; $i < 10; $i++) { 
    $itensOrcamento[] = $i;
}
$orcamento->setItens($itensOrcamento);

$orcamento->valor = 600;

echo $calculadora->calcula($orcamento);


