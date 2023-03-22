<?php

$numero = $_POST["numero"];

echo "<ul>";
for ($i = 0; $i <= $numero; $i++) {
    if ($i % 2 == 0) {
        echo "<li>$i</li>";
    }
}
echo "</ul>";
