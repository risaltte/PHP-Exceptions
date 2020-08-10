<?php

use Alura\Banco\Modelo\Conta\{ContaCorrente, ContaPoupanca, SaldoInsuficienteException, Titular};
use Alura\Banco\Modelo\{CPF, Endereco};

require_once 'autoload.php';

$conta = new ContaCorrente(
    new Titular(
        new CPF('123.456.789-10'),
        'Rafael Aquino Risalte',
        new Endereco("Campo Grande", 'Jockey Club', 'Japão', '1384')
    )
);

$conta->deposita(500);

try {
    $conta->saca(600);
} catch (SaldoInsuficienteException $exception) {
    echo "Você não tem saldo para realizar este saque." . PHP_EOL;
    echo $exception->getMessage() . PHP_EOL;
}

echo "Saldo: {$conta->recuperaSaldo()}";
