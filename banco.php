<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Conta\Conta;

$umEndereco = new Endereco("Campo Grande", "Jockey Club", "Japão", "1384");

$rafael = new Titular(New CPF("123.456.789-10"), "Rafael Aquino Risalte", $umEndereco);
$primeiraConta =  new Conta($rafael);
$primeiraConta->deposita(500);
$primeiraConta->saca(300);

echo $primeiraConta->recuperaCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperaNomeTitular() . PHP_EOL;
echo $primeiraConta->recuperaSaldo() . PHP_EOL;

$fabricie = new Titular( New CPF("987.654.321-10"), "Fabricie Pereira Martins", $umEndereco);
$segundaConta = new Conta($fabricie);

$primeiraConta->transfere(50, $segundaConta);

var_dump($segundaConta);

$outroEndereco = new Endereco("Bodoquena", "Vila Elias Carneiro", "Das Orquideas", "5");
$outraConta = new Conta(new Titular(new CPF('456.379.123-66'), "Marcia Regina Aquino Risalte", $outroEndereco));

echo "Número de contas: " . Conta::recuperaNumeroDeContas();
