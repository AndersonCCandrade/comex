<?php

//              Desafio: Criar uma função que verifica a possibilidade de desconto
//              Para praticar a criação de funções, uso de parâmetros e valor de retorno.
//              Crie uma função que:
//              Receba o valor total de uma compra como parâmetro
//              Se o valor for maior ou igual a R$ 100,00, aplique um desconto de 10% e devolva o valor com desconto
//              Se não, apenas devolva o valor da compra
//              Após executar a função, exiba o valor inicial e o valor final, a fim do cliente ver se teve ou não desconto.
//===========================================================================================================================


$carros = [
    'carro1' => [
        'nome'=>'Volkswagem Voyage 1.0',
        'preco' =>58990
    ],
    'carro2' =>[
        'nome'=>'Fiat Mobi 1.0',
        'preco' => 53790
    ],
    'carro3' =>[
        'nome'=>'Toyota Corolla 2.0',
        'preco' => 127990
    ],
    'carro4' =>[
        'nome'=>'Hyunday Creta 1.6',
        'preco' => 96080
    ],
    'carro5' => [
        'nome'=>'Jeep Compass 1.3',
        'preco' => 146900
    ],
    'carro6' =>[
        'nome'=>'Audi Q3',
        'preco' => 255990
    ],
    'carro7' =>[
        'nome'=>'Peugeot 2008 1.6',
        'preco' => 77480
    ],
    'carro8' =>[
        'nome'=>'Hyunday Tucson 1.6',
        'preco' => 136590
    ],
    'carro9' =>[
        'nome'=>'Volkswagem T-Cross 1.4',
        'preco' => 129310
    ],
    'carro10' =>[
        'nome'=>'Jeep Renegade 1.3',
        'preco' => 137290
    ],
    'carro11' =>[
        'nome'=>'Volkswagem Nivus 1.0',
        'preco' => 109990
    ],
    'carro12' =>[
        'nome'=>'Chevrolet Tracker 1.2',
        'preco' => 135900
    ]
];

function exibirEmTela ($mensagem): void
{
    echo $mensagem . PHP_EOL;
}

function aplicacaoDeDesconto(float $valor):array
{
    $desconto = 0;
    if ($valor>= 100000.00){
        $desconto = $valor*0.1;
        $valor -= $desconto;
    }
    return array($desconto, $valor);

}

function venderCarro($carros, $carro)
{
    $valorDeDesconto = aplicacaoDeDesconto($carros[$carro]['preco']);
    exibirEmTela("Nome do carro: " . $carros[$carro]['nome'] . "  Valor:  R$" . $carros[$carro]['preco']);
    exibirEmTela("Desconto de 10%, para veículo assima de (100000,00):   R$" . $valorDeDesconto[0]);
    exibirEmTela("Valor total do carro com desconto:  R$" . $valorDeDesconto[1]);
}

venderCarro($carros,'carro12');

