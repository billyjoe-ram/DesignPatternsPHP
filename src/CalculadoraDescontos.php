<?php

namespace Alura\DesignPattern;

use Alura\DesignPattern\Descontos\SemDesconto;
use Alura\DesignPattern\Descontos\DescontoMaisDeCincoItens;
use Alura\DesignPattern\Descontos\DescontoMaisDeQuinhentosReais;

class CalculadoraDescontos
{
    public function calcula(Orcamento $orcamento): float
    {
        $cadeiaDescontos = new DescontoMaisDeCincoItens();

        $descontoMais500Reais = new DescontoMaisDeQuinhentosReais();
        $descontoMais500Reais->setProximoDesconto(new SemDesconto());

        $cadeiaDescontos->setProximoDesconto($descontoMais500Reais);
        
        return $cadeiaDescontos->calculaDesconto($orcamento);
    }   
}