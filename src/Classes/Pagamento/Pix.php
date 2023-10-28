<?php

namespace Andersonccandrade\Comex\Classes\Pagamento;

use Andersonccandrade\Comex\Interfaces\MeioDePagamento;

class Pix implements MeioDePagamento
{
    public function efetuandopagamento():bool
    {
        echo "Procesando Pagamento via Pix". PHP_EOL;
        sleep(5);

        echo "Pagamento efetuado com sucesso" . PHP_EOL;
        return true;
    }
}