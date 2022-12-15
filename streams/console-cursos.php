<?php

//'php://stdin' pega o teclado

$teclado = fopen('php://stdin', 'r');

//já tras o 'php://stdin' no modo de leitura

$teclado2 = fopen(STDIN);

// trim faz com que não gere uma linha no final do arquivo

$novoCarro = trim(fgets($teclado));

$novoCarro2 = trim(fgets($teclado2));

file_put_contents('carros-php.txt', "\n$novoCarro", FILE_APPEND);

file_put_contents('Carros 2022.txt', "\n$novoCarro2", FILE_APPEND);
