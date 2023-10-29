<?php

namespace Andersonccandrade\Comex\Classes;

class Produto
{

    public function __construct(
        private string $nome,
        private float $preco,
        private int $qtd_estoque

    )  {

    }

    //Getters - Métodos de retorno de valor
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getQtdEstoque(): int
    {
        return $this->qtd_estoque;
    }

    public function getValorTotal(): float
    {
        return ($this->qtd_estoque * $this->preco);
    }

    /*__________________________________________________________________________________________*/

    //Setters - Metodos de atribuição de valor
    public function setPreco(float $preco): void
    {
        $this->preco = $preco;
    }

    // Funções de manipulação dos produtos

    public function comprar(int $quantidade = 1)
    {
        if ($quantidade > $this->qtd_estoque){
            echo 'Quantidade em estoque indisponivel';
            return;
        }
        $this->qtd_estoque-=$quantidade;
    }
    public function repor($quantidade = 1)
    {
        $this->qtd_estoque-=$quantidade;
    }


}