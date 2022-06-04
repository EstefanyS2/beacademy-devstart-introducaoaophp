<?php

$nome = "Estefany";
$sobrenome = "Lindoso";
$idade = "100";
$cidade = "Rio de Janeiro";


$nome2 = "Chiquinho";
$nome2 .= "da Silva"; //se utiliza essa forma tambem funciona.. Para essa forma e obrigatorio usar o pnto e regra do PHP

//echo $nome . $sobrenome; //dessa forma quando rodar o codigo nao fica espaco entre nome e o sobrenome.
echo $nome . " " . $sobrenome; //utiliza-se essa maneira para obter espaco entre o nome.

echo "Eu me chamo " . $nome . " " . $sobrenome . "tenho" . $idade . " anos e moro em " . $cidade;

echo "<br>";

//maneira mais facil de chama todas as variaveis, e mais viavel de ser utilizada, menos chance de errar
/*chamado de Template String, esse metodo tambem e bastante utilizado em JS so que la nao usa aspas duplas, usa-se a crase e 
se fosse o agudo investido ' */
//OBS: no PHP so funciona se tiver aspas duplas
echo "Eu me chamo {$nome} {$sobrenome}, tenho {$idade} anos e moro em ${cidade}";