<?php

$arquivo = fopen('temp.txt', 'w');

try {
    fwrite($arquivo, 'Mensagem para o arquivo');
    throw new Exception("Exceção aqui.");
} catch (Throwable $exception) {
    echo "Erro ao escrever arquivo" . PHP_EOL;
} finally {
    fclose($arquivo);
}