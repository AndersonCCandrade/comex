<?php

namespace Andersonccandrade\Comex\Classes;

class Pedido
{

    public function __construct(
        private int $id,
        private Cliente $cliente,
        private array $produtos
    ) {
    }

    //Getters - Métodos de retorno de valor
    public function getId(): int
    {
        return $this->id;
    }

    public function getCliente(): string
    {
        return $this->cliente->getNome();
    }

    public function getProduto(): string
    {
        return $this->produto;
    }

    public function getValorTotal()
    {
        $total = 0;
        foreach ($this->produtos as $produto) {
            $total+= $produto->getPreco();
        }
        return number_format($total, 2,',','.');
    }

    /*__________________________________________________________________________________________*/

    //Setters - Metodos de atribuição de valor

    public function adicionarProduto(Produto $produto): void

    {
        array_push($this->produtos, $produto);
    }




}