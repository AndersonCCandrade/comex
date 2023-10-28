<?php

namespace Andersonccandrade\Comex\Classes\Pagamento;

use Andersonccandrade\Comex\Interfaces\MeioDePagamento ;

class Boleto implements MeioDePagamento
{

    public function efetuandopagamento(): bool
    {
        echo "Procesando Pagamento via Cartão de Crédito". PHP_EOL;
        echo "Processando bolento..." . PHP_EOL;
        sleep(20);
        return true;
    }
}