<?php

namespace Alura\DesignPattern\Descontos;

use Alura\DesignPattern\Orcamento;

class DescontoMaisDeCincoItens extends Desconto
{
    public function calculaDesconto(Orcamento $orcamento) : float
    {
        if (count($orcamento->getItens()) > 5) {
            return $orcamento->valor * 0.1;
        }

        return $this->proximoDesconto->calculaDesconto($orcamento);
    }
}