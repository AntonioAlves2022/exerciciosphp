<?php

$numero = $_POST["numero"];

echo "<ul>";
for ($i = 0; $i <= $numero; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0 ) {
        echo "<li>FizzBuzz</li>";
    } elseif ($i % 5 == 0) {
        echo "<li>Fizz</li>";
    } elseif ($i % 3 == 0) {
        echo "<li>Fizz</li>";
    } else {
        echo "<li>$i</li>";
    }
}
echo "</ul>";