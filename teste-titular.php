<?php

use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;
use Alura\Banco\Modelo\NomeInvalidoException;

require_once 'autoload.php';

// *******************************************************************************************
// As configs de tratamentos de Erros devem ser realizadas de preferência no arquivo php.ini
error_reporting(E_ALL);
ini_set('display_errors', 1);
ini_set('log_errors', 0);
ini_set('error_log', '/var/log/minha-aplicacao');
// ********************************************************************************************

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
    switch ($errno) {
        case E_WARNING:
            echo "Aviso: Isso é perigoso." . PHP_EOL;
            break;
        case E_NOTICE:
            echo "Melhor não fazer isso." . PHP_EOL;
            break;
    }
});

try {
    $titular = new Titular(
        new CPF("123.456.789-10"),
        "Ana",
        new Endereco("Campo Grande", "Tiradentes", "A", "456")
    );
} catch (NomeInvalidoException $exception) {
    echo $exception->getMessage() . PHP_EOL;
}

var_dump($titular);


