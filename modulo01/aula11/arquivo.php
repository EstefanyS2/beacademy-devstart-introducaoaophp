<?php

$arquivo = fopen('produtos.csv', 'a+');

fwrite($arquivo, 'Alessandro'.PHP_EOL);
fwrite($arquivo, 'bruno'.PHP_EOL);
fwrite($arquivo, 'luiza'.PHP_EOL);

fclose($arquivo);