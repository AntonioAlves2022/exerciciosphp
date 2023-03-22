<?php

$texto = $_POST["texto"];
$vogais = array("a", "e", "i", "o", "u");
$contador = 0;

for ($i = 0; $i < strlen($texto); $i++) {
    if (in_array($texto[$i], $vogais)) {
        $contador += 1;
    }
}
echo "A palavra $texto tem $contador vogais";
