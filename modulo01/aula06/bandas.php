<?php

$bandas = [
    'Dream theater', //0
    'Neo Pi Neo', //1
    'Exaltasamba', //2
    'iron Maiden', //3
    'Aviões do Forró', //4
];

$bandas[100] = 'Nirvania';
$bandas[9] = 'Calcinha Preta';

$bandas[2] = 'Turma do pagode';//Substitui oq já existe na posição 2

echo '<ul>';

foreach ($bandas as $cadaBanda) {
    echo "<li>{$cadaBanda}</li>";
}

echo '</ul>';