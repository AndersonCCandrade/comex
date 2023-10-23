<?php

namespace Andersonccandrade\Comex\Classes;

class Endereco
{
    public function __construct(
        private string $cep,
        private string $rua,
        private string $bairro,
        private string $cidade,
        private string $uf
    ){
    }

    //Getters - Métodos de retorno de valor
    public function getCep(): string
    {
        return preg_replace("/^(\d{5})(\d{3})/","$1-$2", $this->cep);
    }

    public function getRua(): string
    {
        return $this->rua;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getUf(): string
    {
        return $this->uf;
    }

    /*__________________________________________________________________________________________*/

    //Setters - Metodos de atribuição de valor
    public function setRua(string $rua): void
    {
        $this->rua = $rua;
    }

    public function setBairro(string $bairro): void
    {
        $this->bairro = $bairro;
    }

    public function setCidade(string $cidade): void
    {
        $this->cidade = $cidade;
    }

    public function setUf(string $uf): void
    {
        $this->uf = $uf;
    }

}