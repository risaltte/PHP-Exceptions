<?php

use Alura\Banco\Service\Autenticador;
use Alura\Banco\Modelo\Funcionario\{Diretor, Gerente};
use Alura\Banco\Modelo\{CPF, Endereco};
use Alura\Banco\Modelo\Conta\Titular;

require_once 'autoload.php';

$autenticador = new Autenticador();

$umDiretor = new Diretor('João da Silva',
    new CPF('698.478.147-96'),
    10000
);

$umGerente = new Gerente('Marcia Rodrigues',
    new CPF('478.254.147-57'),
    5000
);

$umTitular = new Titular(new CPF('123.456.789-10'),
    'Rafael Aquino Risalte',
    new Endereco('Campo Grande', 'Jockey', 'Japão', '1384')
);

$autenticador->tentaLogin($umDiretor, '1234');
$autenticador->tentaLogin($umGerente, '4321');
$autenticador->tentaLogin($umTitular, 'abcd');
