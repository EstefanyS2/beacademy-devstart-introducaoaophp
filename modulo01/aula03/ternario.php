<?php

$idade = 22;

echo $idade >= 18 ? "de maior" : "de menor";

echo "<br>";

$nome = 'Estefany';
echo isset($nome) ? $nome : 'nome não definido'; //se eu não declarar a variavel nome, aprece nome não definido

echo $nome ?? 'nome não definido'; /*esse comando faz exatamente oq a linha 10 faz. Essa é uma forma mais simplificada e 
essa forma vai funcionar tanto se eu identificar a variavel nome como nao identificar*/
// ?? serve para mostrar se existe algo na esquerda, se não mostra a direita