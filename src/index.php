<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Andersonccandrade\Comex\Classes\Cliente;
use Andersonccandrade\Comex\Classes\Produto;
use Andersonccandrade\Comex\Classes\Endereco;
use Andersonccandrade\Comex\Classes\Pedido;
use Andersonccandrade\Comex\Classes\Carrinho;

$clientes = [
    $cliente1 = new Cliente(
        'Anderson Carlos',
        'anderson.ccarvalho@sp.senac.br',
        '11991500354',
        new Endereco(
            '02604200',
            'Rua Almir Rodrigues, 3371',
            'Vila amalia',
            'São Paulo',
            'SP'
        )
    ),

    $cliente2 = new Cliente(
        'Davi Carvalho',
        'davi.bcarvalho@sp.senac.br',
        '11989895656',
        new Endereco(
            '02701200',
            'Rua voluntarios da patria, 3371',
            'Santana',
            'São Paulo',
            'SP'
        )
    )
];

foreach ($clientes as $cliente){
    echo "Informações do Cliente: " . $cliente->getNumero() .PHP_EOL;

    echo "Nome: " . $cliente->getNome() . PHP_EOL;
    echo "E-mail: " . $cliente->getEmail() .PHP_EOL;
    echo "Telefone: " . $cliente->getTelefone() .PHP_EOL;
    echo "Endereco " . $cliente->getEndereco(). PHP_EOL;
    echo PHP_EOL;
}

$produtos = [
    $produto1 = new Produto('Arroz',28.00,6000),
    $produto2 = new Produto('Fejão',55.40,5000),
    $produto3 = new Produto('Açucar',33.80,10000),
    $produto4 = new Produto('Macarrão',33.20,1100),
    $produto5 = new Produto('Molho de Tomate',22.40,20000)
];




foreach ($produtos as $chave => $item){
    echo "O item de numero " . $chave . " tem essas propriedades: " . PHP_EOL;

    echo "Nome: " . $item->getNome() . PHP_EOL;
    echo "Preço: R$" . number_format($item->getPreco(), 2,',','.' ). PHP_EOL;
    echo "Estoque: " . $item->getQtdEstoque() . PHP_EOL;
    echo "Valor total: R$" . number_format($item->getValorTotal(), 2, ',','.') . PHP_EOL;

    echo PHP_EOL;
}



$pedido = new Pedido(1, $cliente1, $produtos);


echo "# Pedido n " . $pedido->getId() . PHP_EOL;
echo "> Cliente: " . $pedido->getCliente() . PHP_EOL;
echo "> Valor Total: " . $pedido->getValorTotal() . PHP_EOL;

$carrinho = new Carrinho($produtos);

echo "Valor total : R$ " . $carrinho->getValorCompra() . PHP_EOL;
echo "Valor fo frete : R$ " . $carrinho->getValorfrete(). PHP_EOL;
echo "Valor total do carrinho: R$ " . $carrinho->getValorTotal(). PHP_EOL;

