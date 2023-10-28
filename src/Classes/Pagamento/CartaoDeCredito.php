<?php

namespace Andersonccandrade\Comex\Classes\Pagamento;

use Andersonccandrade\Comex\Interfaces\MeioDePagamento;


class CartaoDeCredito implements MeioDePagamento
{
    public function efetuandopagamento(): bool
    {
        echo "Procesando Pagamento via Cartão de Crédito". PHP_EOL;
        $conexao = rand(0,1);
        for ($i = 1; $i < 4; $i++) {
            echo "Conexao $i: Estabelecendo conexao com operadora " . PHP_EOL;
            sleep(5);
            if ($conexao == 1){
                $i = 3;
                echo "Pagamento efetuado com sucesso" . PHP_EOL ;
                return true;
            }
            echo "Tempo Esgotado. Tentando novamente ..." . PHP_EOL;
            sleep(2);
            $conexao = rand(0,1);
        }
        echo "Pagamento Recusado";
        return false;
    }
}