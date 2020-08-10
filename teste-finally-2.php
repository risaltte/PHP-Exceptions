<?php

function a(): int
{
    try {
       echo "Código";
       return 0;
    } catch (Throwable $exception) {
        echo "Problema" . PHP_EOL;
        return 1;
    } finally {
        echo "Final do Código." . PHP_EOL;
    }
}

echo a();
