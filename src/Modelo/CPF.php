<?php

namespace Alura\Banco\Modelo;

use http\Exception\InvalidArgumentException;

final class CPF
{
    private string $numero;

    public function __construct(string $numero)
    {
        $numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
           'options' => [
               'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
           ]
        ]);

        if ($numero === false) {
            throw new \InvalidArgumentException();
        }

        $this->numero = $numero;
    }

    public function recuperaNumeroCPF(): string
    {
        return $this->numero;
    }
}
