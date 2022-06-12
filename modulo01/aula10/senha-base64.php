<?php

$senha = '123456';
$code = 'MTIzNDU2';

echo base64_encode($senha).PHP_EOL;
echo base64_encode($code).PHP_EOL;

//codifica e descodifica
//nao pode ser usado em bancos de dados