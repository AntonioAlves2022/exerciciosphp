<?php

/**
 * Summary of validaNumero
 * @param mixed $numero
 * @return void
 */
function validaNumero($numero)
{
    if ($numero > 10) {
        echo "O numero $numero é maior do que 10";
    } else if ($numero < 10) {
        echo "O numero $numero é maior do que 10";
    }
}

validaNumero(17);