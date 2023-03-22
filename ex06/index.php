<?php

function fatorial($numero)
{
    $fat = 1;
    for ($i = 1; $i <= $numero; $i++) {
        $fat = $fat * $i;
    }

    return $fat;
}

$fat = fatorial(5);

echo "Fatorial de 5 é $fat";