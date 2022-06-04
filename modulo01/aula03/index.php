<?php

//Concatenacao: Utilizado para juntar duas coisas em uma so, e utilizamos quando estamos trabalhando variaveis de String

//Aritmeeticos
$salario = 2000;
$salarioDaMaria = 3000;

$salario = $salario + 200; //2200
$salarioDaMaria = $salarioDaMaria + 200; //3200


//forma rapida de atribuir salario e aumento dentro de uma variavel, e mais viavel para utilizar.
$salario += 200; //2400 //incremento 
$salarioDaMaria -= 200; //3400

$salario -= 500; //1900 decremeto
$salarioDaMaria -= 500; 

//tecnica de adciona mais um numero... INCREMENTO...
//vamos utilizar esse metodo mais vezes quando for estrutura de repeticao
$numero = 20;

$numero = $numero + 1; //21 aumenta 1 numero
$numero += 1; //22 aumenta mais um numero, pq pega o 21
$numero++; //23 aumenta mais um numero, pq pega o 22