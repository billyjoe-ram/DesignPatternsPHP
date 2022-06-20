<?php

namespace Alura\DesignPattern;

class Orcamento
{
    public float $valor;
    private array $itens = [];

    public function setItens(array $itens)
    {
        $this->itens = $itens;
    }

    public function getItens() : array
    {
        return $this->itens;
    }
}