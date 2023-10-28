<?php

//              Tarefa: Analisar uma lista de produtos e encontrar o mais caro e a média de preço
//              Para praticar o uso de array, variáveis, loops e treinar lógica.
//              Usando a lista de produtos, o faça uma função que verifique e exiba qual o produto
//              de valor mais alto e o de valor mais baixo
//======================================================================================================================

// array de itens (estoque)
$carros = [
    'carro1' =>[
        'nome'=>'Volkswagem Voyage 1.0',
        'preco' =>58990,
        'qtd_estoque'=> 10
    ],
    'carro2' =>[
        'nome'=>'Fiat Mobi 1.0',
        'preco' => 53790,
        'qtd_estoque'=> 20
    ],
    'carro3' =>[
        'nome'=>'Toyota Corolla 2.0',
        'preco' => 127990,
        'qtd_estoque'=> 15
    ],
    'carro4' =>[
        'nome'=>'Hyunday Creta 1.6',
        'preco' => 96080,
        'qtd_estoque'=> 5
    ],
    'carro5' =>[
        'nome'=>'Jeep Compass 1.3',
        'preco' => 146900,
        'qtd_estoque'=> 20
    ],
    'carro6' =>[
        'nome'=>'Audi Q3',
        'preco' => 255990,
        'qtd_estoque'=> 6
    ],
    'carro7' =>[
        'nome'=>'Peugeot 2008 1.6',
        'preco' => 77480,
        'qtd_estoque'=> 15
    ],
    'carro8' =>[
        'nome'=>'Hyunday Tucson 1.6',
        'preco' => 136590,
        'qtd_estoque'=> 2
    ],
    'carro9' =>[
        'nome'=>'Volkswagem T-Cross 1.4',
        'preco' => 129310,
        'qtd_estoque'=> 30
    ],
    'carro10' =>[
        'nome'=>'Jeep Renegade 1.3',
        'preco' => 137290,
        'qtd_estoque'=> 30
    ],
    'carro11' =>[
        'nome'=>'Volkswagem Nivus 1.0',
        'preco' => 109990,
        'qtd_estoque'=> 25
    ],
    'carro12' =>[
        'nome'=>'Chevrolet Tracker 1.2',
        'preco' => 135900,
        'qtd_estoque'=> 8
    ]
];

//função para exibir mensagem na tela
function exibirEmTela (string $mensagem): void
{
    echo $mensagem . PHP_EOL;
}

//função para verificar o carro mais Caro e mais barato
function produtoMaisCaroEBarato(array $carros)
{
   $carroMaisCaro = array_key_first($carros);
   $carroMaisBarato = array_key_first($carros);
   foreach ($carros as $indice => $nome){
       if ($carros[$indice]['preco'] > $carros[$carroMaisCaro]['preco']){
           $carroMaisCaro = $indice;
       }
       if ($carros[$indice]['preco'] < $carros[$carroMaisBarato]['preco']){
           $carroMaisBarato = $indice;
       }
   }
   exibirEmTela("O carro mais caro em estoque é o " . $carros[$carroMaisCaro]['nome'] .
        " com valor de R$ " . $carros[$carroMaisCaro]['preco'] . ".");
   exibirEmTela("O carro mais barato em estoque é o " . $carros[$carroMaisBarato]['nome'] .
        " com valor de R$ " . $carros[$carroMaisBarato]['preco'] . ".");
}

//função para calcular  a média dos valores dos carro em estoque
function mediaDePrecoDeCarrosEmEstoque(array $carros)
{
    $valorTotalDePreco = 0;
    foreach ($carros as $indice => $preco){
        $valorTotalDePreco += $carros[$indice]['preco'];
    }
    $mediaDePreco = $valorTotalDePreco/count($carros);
    exibirEmTela("A média dos preço de carros em estoque é de " . $mediaDePreco . ".");
}

produtoMaisCaroEBarato($carros);
mediaDePrecoDeCarrosEmEstoque($carros);
