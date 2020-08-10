<?php

use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$umEndereco = new Endereco('Campo Grande', 'Jockey Club', 'Japão', '1384');
$outroEndereco = new Endereco('Bodoquena', 'Elias Carneiro', 'Das Orquideas', '5');

echo $umEndereco . PHP_EOL;

$umEndereco->cidade = 'nomeCidade';
$umEndereco->bairro = 'nomeBairro';
$umEndereco->rua = 'nomeRua';
$umEndereco->numero = 'numero123';

echo $umEndereco . PHP_EOL;
exit();



echo $umEndereco . PHP_EOL;
echo $outroEndereco . PHP_EOL;
