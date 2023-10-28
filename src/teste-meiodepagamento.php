<?php

use Andersonccandrade\Comex\Classes\{Cliente, Endereco, Pedido, Produto};
use Andersonccandrade\Comex\Classes\Pagamento\{Pix , Boleto , CartaoDeCredito};

require_once __DIR__ . '/../vendor/autoload.php';

$cliente1 = new Cliente(
    'Anderson Carlos',
    'anderson.ccarvalho@tr.spfac.br',
    '11991500354',
    new Endereco(
        '02604200',
        'Rua Almir Rodrigues, 3371',
        'Vila amalia',
        'São Paulo',
        'SP'
    )
);

$produtos = [
    $produto1 = new Produto('Arroz',28.00,6000),
    $produto2 = new Produto('Fejão',55.40,5000),
    $produto3 = new Produto('Açucar',33.80,10000),
    $produto4 = new Produto('Macarrão',33.20,1100),
    $produto5 = new Produto('Molho de Tomate',22.40,20000)
];

$pedido = new Pedido('1',$cliente1,$produtos,new Pix());
$pedido->getMeioDePagamento()->efetuandopagamento();


$pedido1 = new Pedido('1',$cliente1,$produtos,new CartaoDeCredito());
$pedido1->getMeioDePagamento()->efetuandopagamento();


$pedido2 = new Pedido('1',$cliente1,$produtos,new Boleto());
$pedido2->getMeioDePagamento()->efetuandopagamento();