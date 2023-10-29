<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Andersonccandrade\Comex\Classes\{Cliente, Endereco};


// Testando a cliação de cliente com e-mail invalido.
$cliente = new Cliente(
    'Paulo Roberto',
    'paulorobertoge.com',
    '11923531245',
    new Endereco('02721-200','Rua Paulo sergio','Vila Paula','Paulinia','SP')
);

$cliente1 = new Cliente(
    'Pedro Roberto',
    'Pedroroberto@mail.com',
    '1192365245',
    new Endereco('02721-200','Rua Paulo sergio','Vila Paula','Paulinia','SP')
);

//Testando adição de e-mail invalido.

$cliente->setEmail("carlosroberto.com");



