<?php

function somarArray($lista)
{
    $quantidade = sizeof($lista);
    $soma = 0;
    for ($i = 0; $i < $quantidade; $i++) {
        if ($lista[$i] % 2 == 1) {
            $soma += $lista[$i];
        }
    }

    return $soma;
}

$lista = array(2, 5, 8, 9, 3, 7, 8);

$total = somarArray($lista);

echo "Soma: $total";
