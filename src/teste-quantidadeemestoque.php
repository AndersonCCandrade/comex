<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Andersonccandrade\Comex\Classes\Produto;


$produto = new Produto('Arroz',28.00,6000);



// Testando erro de quantidade maior que a disponivel em estoque
$produto->comprar( 6001);
echo $produto->getQtdEstoque() . PHP_EOL;


// Testando valor negativo
$produto->comprar(- 6001);

//Testando reposição de item com valor negativo
$produto->repor(-1000);
echo $produto->getQtdEstoque() . PHP_EOL;