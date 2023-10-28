<?php

namespace Andersonccandrade\Comex\Classes;

class Cliente
{
    private static int $numero = 0;
    private int $numero_cliente = 0;
    private string $email;

    private int $totalDeCompras = 0;
    private array $pedidos = [];

    public function __construct(
        private string $nome,
        string $email,
        private string $telefone,
        private Endereco $endereco,
    )  {
        self::$numero ++;
        $this->numero_cliente += self::$numero;

        try {
            if ($this->validaEmail($email) !== false) {
                $this->email = $email;
            } else {
                throw new \InvalidArgumentException("Argumento $email Invalido" . PHP_EOL);
            }
        }catch (\InvalidArgumentException $erro){
            echo $erro->getMessage();
            echo "Email Invalido" . PHP_EOL;
            return;
        }
    }

    //Getters - Métodos de retorno de valor


    public function getNumero(): int
    {
        return $this->numero_cliente;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getTelefone(): string
    {
        return preg_replace("/^(\d{2})(\d{5})(\d{4})/", "($1) $2-$3", $this->telefone);
    }

    public function getEndereco(): string
    {
        return $this->endereco->getCep() . ' - ' .
            $this->endereco->getRua() . ' ' .
            $this->endereco->getBairro() . ' , ' .
            $this->endereco->getCidade() . ' - ' .
            $this->endereco->getUf();
    }

    public function getTotalDeCompras(): int
    {
        return $this->totalDeCompras;
    }


    public function getPedidos(): array
    {
        return $this->pedidos;
    }



    /*__________________________________________________________________________________________*/

    //Setters - Metodos de atribuição de valor

    public function setEmail(string $email): void
    {
        try {
            if ($this->validaEmail($email) !== false) {
                $this->email =$email;
            } else {
                throw new \InvalidArgumentException("Argumento $email Invalido". PHP_EOL);
            }
        }catch (\InvalidArgumentException $erro){
            echo $erro->getMessage();
            echo "Email Invalido" . PHP_EOL;
            return;
        }
    }

    public function setTelefone(string $telefone): void
    {
        $this->telefone = $telefone;
    }

    public function setEndereco(array $endereco): void
    {
        $this->endereco = $endereco;
    }

    public function adicionarPedido(Pedido $pedido): void
    {
        $this->totalDeCompras++;
        array_push($this->pedidos, $pedido);
    }



    // Funções de validaçao

    private function validaEmail(string $email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);

    }


}