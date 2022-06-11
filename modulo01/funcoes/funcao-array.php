<?php

declare(strict_types=1);

function mostrarNomes(array $nomes): void //quando a funcao nao tem a palavra (return) adciona void.
{
    foreach ($nomes as $cadaNome) {
        echo "Nome: ".$cadaNome.PHP_EOL;
}
}

mostrarNomes(['Joaquim', 'Luzia', 'Filomena']);

//mostrarNomes('teste'); - comesse comando nao funciona