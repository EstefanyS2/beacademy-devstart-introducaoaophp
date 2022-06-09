<!DOCTYPE html>
<html lang="en">
<thead>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name=" keymords " content="php, informacoes basicas, html " />
    <meta name=" descption " content="Tabela com informacoes basicas com html e php " />

<?php

$prod1 = [
    'nome' => 'Vestido',
    'preco' => '93.90',
    'descricao' => 'Vestidos Acabamento de babados Pescoço de sobrepeliz Amarrar',
    'imagem' => '<img  height="200"  src=vestido.png>',
];

$prod2 = [
    'nome' => 'Sandalia salto', 
    'preco' => 146.99,
    'descricao' => 'Slingbacks Strass Simples Glamour',
    'imagem' => '<img height="200" src=sandalia.png>',
];

$prod3 = [
    'nome' => 'Calca',
    'preco' => '135.95',
    'descricao' => 'Botão Corte Fora Bolso Rasgado Zíper Simples Jeans',
    'imagem' => '<img height="200" src=calca.png> ',
];

$prod4 = [
    'nome' => 'Bolsa',
    'preco' => '54.90',
    'descricao' => 'Bolsa acochoada com alças de corrente',
    'imagem' => '<img height="200" src=bolsa.png>', 
];

$prod5 = [
    'nome' => 'Blusa',
    'preco' => '59.90',
    'descricao' => 'Blusa basica em algodao com manga longa preta',
    'imagem' => "<img height='200' src=blusa.png >",
];

$produto = [
    $prod1,
    $prod2,
    $prod3,
    $prod4,
    $prod5,
];

?>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<div class="container">
    <h1 class="mt-5"> Loja </h1>
    <hr>
<table class="table table-houver table-striped mt-5 ">
<thead class="table-dark table-striped mt-5"> 
    <tr>
        <th>Nome</th>
        <th>Preco</th>
        <th>Descricao</th>
        <th>Imagem</th>
    </tr>
</thead>
<tbody>
    <?php
    foreach ($produto as $cadaProduto) {
        echo "<tr>";
          echo '<td>' . $cadaProduto['nome'] . "</td>";
          echo '<td>' . $cadaProduto['preco'] . "</td>";
          echo '<td>' . $cadaProduto['descricao'] . "</td>";
          echo '<td>' . $cadaProduto['imagem'] . "</td>";
        echo '</tr>';
    }
    ?>
</tbody>
</table>
</div>
</html>