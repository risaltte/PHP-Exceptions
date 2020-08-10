<?php

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$contaCorrente = new ContaCorrente(
    new Titular(
        new CPF("123.456.789-10"),
        "Rafel Aquino Risalte",
        new Endereco("Campo Grande", "Jockey", "Japão", "478")
    )
);

try {
    $contaCorrente->deposita(-500);
} catch (InvalidArgumentException $exception) {
    echo "Valor a depositar precisa ser positivo." . PHP_EOL;
}

echo "Saldo: {$contaCorrente->recuperaSaldo()}" . PHP_EOL;

