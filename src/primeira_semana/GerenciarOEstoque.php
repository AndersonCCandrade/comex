<?php

//          Tarefa: Criar funções/variáveis para gerenciar o estoque
//          Para praticar o uso de arrays, variáveis, funções e treinar lógica.
//          Reescreva a lista de produtos, mas agora ela deve conter o estoque de
//          produtos do e-commerce. O array deve ter os produtos com nome, preço
//          e quantidade em estoque. Implemente funções para adicionar produtos
//          ao estoque, remover produtos do estoque e verificar a disponibilidade
//          de um produto específico.
//=====================================================================================================================

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
function exibirEmTela ($mensagem): void
{
    echo $mensagem . PHP_EOL;
}

//função para verificar a existencia do item
function verificaItens (array $carros, string $item, string $tipo): int
{

    $existe = 0;

    /* Há quatro tipos de verificação: uma para adiçao de item(add), uma pare remoção de item(rem)
    uma para aumentar a quantidade de item (atl)*/
    if ($tipo == 'add'){
        foreach($carros as $carro){
            if($carro['nome'] == $item){
                $existe = 1;
                break;
            }
        }
    }else
    {
        foreach($carros as $indice => $carro){
            if($indice == $item){
                $existe = 1;
                break;
            }
        }
    }

    return $existe;
}

// função para adicionar indice concatenado no array
function contaIndice(array $carros):string
{
    $indice = substr(
            (array_key_last($carros)), 5, 10) + 1 ;
    return $indice;
}

//função para adicionar carros ao estoque.
function adicinarCarros(array $carros, string $nome, float $preco, int $quantidade) : array
{
    $carroExistenteEmEstoque = verificaItens($carros, $nome, 'add');//add - atriubuto para saber pra que tipo de verificação
    if ($carroExistenteEmEstoque != 1){
        $indice = contaIndice($carros);
        $carros['carro'.$indice] = [
            'nome'=> $nome,
            'preco'=> $preco,
            'qtd_estoque' => $quantidade
        ];
        exibirEmTela("Carro adicionado com sucesso");
    }else{
        exibirEmTela("Este carro existe em estoque. Favor atualizar sua quantidade");
    }
    return $carros;
}

//função para remover carros do estoque.
function removeCarros(array $carros, string $carro):array
{
    $carroExistenteEmEstoque = verificaItens($carros, $carro, 'rem');//rem - atriubuto para saber pra que tipo de verificação
    $resultado = $carros;
    if ($carroExistenteEmEstoque == 1){
        unset($carros[$carro]);
        $resultado = $carros;
        exibirEmTela("Carro removido com sucesso");

    }else{
        exibirEmTela("Este carro não existe em estoque.");
    }
    return $resultado;
}

//Função para aumentar a quantidade de um tipo de carro no estoque
function aumentarQtdNoEstoque(array $carros, string $carro, int $quantidade): array
{
    $carroExistenteEmEstoque = verificaItens($carros, $carro,'atl');//chc - atriubuto para saber pra que tipo de verificação
    if($carroExistenteEmEstoque == 1){
        $carros[$carro]['qtd_estoque'] += $quantidade;
        exibirEmTela("Quantidade atualizada com sucesso: " . $carros[$carro]['qtd_estoque']);
    }else{
        exibirEmTela("Este Carro não esxiste em estoque. Favor Adicinar o Veiculo");
    }
    return $carros;
}

//Função para diminuir a quantidade de um tipo de carro do estoque
function diminuirQtdNoEstoque(array $carros, string $carro, int $quantidade): array
{
    $carroExistenteEmEstoque = verificaItens($carros, $carro,'atl');//chc - atriubuto para saber pra que tipo de verificação

    if($carroExistenteEmEstoque == 1){
        if($quantidade <= $carros[$carro]['qtd_estoque']){
            $carros[$carro]['qtd_estoque'] -= $quantidade;
            exibirEmTela("Quantidade atualizada com sucesso: " . $carros[$carro]['qtd_estoque']);
        }else{
            exibirEmTela("A Quantidade existente é de : " . $carros[$carro]['qtd_estoque'] .
                ". Quantidade solicitado (".$quantidade. ") indisponivel para venda.");
        }
    }else{
        exibirEmTela("Este Carro não existe em estoque. Favor Adicinar o Veiculo");
    }
    return $carros;
}



//Teste de Funções.

$carros = adicinarCarros($carros,'BMW 320i 2.0', 248900, 19);

$carros = removeCarros($carros,'carro12');

$carros = adicinarCarros($carros, 'Fiat Doblo 1.8', 86290, 3);

$carros = aumentarQtdNoEstoque($carros, 'carro14', 3);

$carros = diminuirQtdNoEstoque($carros, 'carro9', 100);

