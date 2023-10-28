<?php

namespace Andersonccandrade\Comex\Exception;

class ValorNegativoEmRemocaoOuAdicaoDeProdutos extends \DomainException
{
    public function __construct($quantidade)
    {
        $message = "O Valor negativo ($quantidade) não é valido para operação." .PHP_EOL;
        parent::__construct($message);
    }
}