<?php

$arquivo = fopen('carros-php.txt', 'w'); // 'w' cria um arquivo e escrevi no inicio. 'a' cria um arquivo e escrevi no final.

$curso = "Renault Captur 2022\n Volkswagen Tarok\n Ford Bronco Sport 2022\n Novo BMW M3\n Chevrolet Equinox 2022\n Ford Ranger Black\n Ford Mustang Mach 1\n Fiat Toro 2022\n Novo Hyundai Creta";

fwrite(stream: $arquivo,data:  $curso);

fclose($arquivo);

$conteudo = "Os dados para escrever. Pode ser uma string, uma matriz ou um recurso de fluxo.";

file_put_contents('file_put_contents.txt', $conteudo, FILE_APPEND); //FILE_APPEND Não sobre escreve o arquivo escrevi no final dele.