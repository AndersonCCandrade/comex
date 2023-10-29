<?php

namespace Andersonccandrade\Comex\Exception;

class QuantidadeEmEstoqueInferior extends \DomainException
{
    public function __construct(int $quantiade, int $qtd_estoque)
    {
        $message = "Não temos $quantiade em estoque. A quantide atual em estoque é de $qtd_estoque";
        parent::__construct($message);
    }
}