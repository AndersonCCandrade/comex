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
        try {
            if ($quantidade > $this->qtd_estoque) {
                throw new \InvalidArgumentException("A quantidade de compra não pode ser maior que a quantidade em estoque." . PHP_EOL);
            }
            if ($quantidade < 0) {
                throw new \InvalidArgumentException("O Valor negativo ($quantidade) não é valido para operação." .PHP_EOL);
            }
        }catch (\InvalidArgumentException $erro){
            echo $erro->getMessage();
            return;
        }

        $this->qtd_estoque-=$quantidade;
    }
    public function repor($quantidade):void
    {
        try{
            if ($quantidade < 0){
                throw new \InvalidArgumentException("O Valor negativo ($quantidade) não é valido para operação." .PHP_EOL);
            }
        }catch (\InvalidArgumentException $erro){
            echo $erro->getMessage();
            return;
        }
        $this->qtd_estoque+=$quantidade;
    }


}