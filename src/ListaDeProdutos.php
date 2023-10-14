<?php

//          Tarefa: Crie uma lista de produtos e exiba cada um deles
//          Para praticar a criação de arrays e uso de loops.
//          Crie uma lista que contenha vários produtos, os quais devem ter nome e preço.


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

foreach ($carros as $carro => $nome )
{
    exibirEmTela("-------------------------------------------");
    exibirEmTela($carro);
    exibirEmTela("Carro: " . $nome['nome']);
    exibirEmTela("Preco: " . $nome['preco']);
    exibirEmTela("-------------------------------------------");
}