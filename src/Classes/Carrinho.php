<?php

namespace Andersonccandrade\Comex\Classes;

class Carrinho
{

    public function __construct(
        private array $produtos
    )    {
    }

    public function getProdutos(): array
    {
        return $this->produtos;
    }

    public function getValorCompra()
    {
        //se for maior que 100,00 aplicar desconto de 10%
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total+= $produto->getPreco();
        }
        return $total >= 100 ? $total *0.9 : $total;

    }

    public function getValorfrete()
    {
        return $this->getValorCompra() >= 100 ? 0 : 7.80;
    }

    public function getValorTotal()
    {
        return $this->getValorCompra() + $this->getValorfrete();
    }

}
