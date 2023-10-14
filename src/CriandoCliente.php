<?php

//              Tarefa: Crie um cliente com dados básicos. Para praticar a criação de arrays.
//              Crie um array que conterá os dados básicos do cliente, como nome, e-mail,
//              número de celular e endereço.

$cliente=[
    'nome' => 'Anderson',
    'email' => 'anderson@e-mail.com',
    'telefone' =>
        [
            'movel' => '11989892525',
            'residencial' => '1122582888'
        ],
    'endereco'  =>
        [
            'rua' => 'Rua do php, 33',
            'complemento' => 'Casa',
            'bairro' => 'laranjeiras',
            'cidade' => 'são paulo',
            'estado' => 'SP',
            'cep' => '01721-200'
        ]
];

