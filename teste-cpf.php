<?php

use Alura\Banco\Modelo\CPF;

require_once 'autoload.php';

try {
    $cpf = new CPF("123.456.789.10");
} catch (InvalidArgumentException $exception) {
    echo "CPF inválido. Informe um CPF no formato 000.000.000-00.";
}
