<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF};
use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Funcionario\{Diretor, Desenvolvedor, Gerente, EditorVideo};

$umFuncionario = new Desenvolvedor(
    'Rafael Risalte',
    new CPF('123.456.789-10'),
    1000
);

$umFuncionario->sobeDeNivel();

$umaFuncionaria = new Gerente(
    'Fabricie Martins',
    new CPF('987.654.312-89'),
    3000
);

$umDiretor = new Diretor("Ana Paula",
    new CPF('456.987.123-11'),
    '5000'
);

$umEditor = new EditorVideo("Paulo Silva",
    new CPF('753.145.987-58'),
    '1500');

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);
$controlador->adicionaBonificacaoDe($umDiretor);
$controlador->adicionaBonificacaoDe($umEditor);

echo $controlador->recuperaTotal();