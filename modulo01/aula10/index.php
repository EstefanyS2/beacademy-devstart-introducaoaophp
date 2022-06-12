<?php

$notasCursoA = [
    10,
    9,
    9.5,
    7,
];

$notasCursoB = [
    8,
    9.4,
    5,
    6,
];

function mediaDeNotas(array $notas): float
{
    /*$total = 0; //10 / 19/ 28.5 soma uma nota com anterior
    $quantidade = 0; //1 /2 /3 incrementa

    foreach ($notas as $cadaNota) {
          $total += $cadaNota;
          $quantidade++; }*/


   // return $total / $quantidade;
   
   return array_sum($notas) / count($notas);
    //array_sum "soma de todas as notas" count "quantidade de notas ex:4"
}

echo mediaDeNotas($notasCursoA).PHP_EOL;
echo mediaDeNotas($notasCursoB).PHP_EOL;