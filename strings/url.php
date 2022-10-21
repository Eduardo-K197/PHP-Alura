<?php

$url = "https://alura.com.br";

if (str_starts_with($url, 'https'))  //str_starts_with diz se uma string começa com determinado texto.
	echo "É uma URL segura";
else
	echo "Não é uma URL segura";

echo PHP_EOL;

if (str_ends_with($url, '.br'))  //str_ends_with diz se uma string termina com determinado texto.
	echo "É uma URL Brasileira";
else
	echo "Não é uma URL Brasileira";