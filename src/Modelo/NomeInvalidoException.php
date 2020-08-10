<?php

namespace Alura\Banco\Modelo;

class NomeInvalidoException extends \DomainException
{
    public function __construct(string $nome)
    {
        $tamanhoNome = strlen($nome);
        $mensagem = "Nome inválido. Um nome válido precisa ter pelo menos 5 letras e $nome possui $tamanhoNome letras.";
        parent::__construct($mensagem);
    }
}
