<?php
echo "<pre>";

$altura = 5;

for ($fila = 1; $fila <= $altura; $fila++) {
    
    for ($espacio = 1; $espacio <= $altura - $fila; $espacio++) {
        echo " ";
    }
    
    for ($asterisco = 1; $asterisco <= (2 * $fila - 1); $asterisco++) {
        echo "*";
    }
    
    echo "\n";
}

echo "</pre>";
?>