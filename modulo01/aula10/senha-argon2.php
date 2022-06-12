<?php

$senha = '123456';

echo password_hash($senha, PASSWORD_ARGON2I) . PHP_EOL;

//tipo mais utilizado e recomendado usar em um banco de Dados, pos a seguranca e maior.