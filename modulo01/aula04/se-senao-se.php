<?php

//Decisão encadeada, quando uma decisão se divide em outra.

$n = 10;

if ($n > 0) {
    echo "Positivo";
} else {
    if ($n < 0 ) {
        echo "Negativo";
    }
    echo "Nulo";
}

echo "<br> Pronto, terminou";