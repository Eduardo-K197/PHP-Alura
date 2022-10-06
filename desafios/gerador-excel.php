<?php

echo "<hi>Gerar Excel - csv</hi>";

// Criar o cabecalho do Excel - Usar a fun¢ao mb_convert_encoding para converter

$cabecalho = ['id', 'Nome', 'E-mail', utf8_decode('Endereço')];

// Array de dados
$usuarios = [
	[
		'id' => '1',
		'nome' => 'Eduardo',
		'email' => 'carloseduardobezerradasilva2@gmail.com',
		'endereco' => utf8_decode('Gravatá-PE')
	],
	[
		'id' => '2',
		'nome' => 'fff',
		'email' => 'sffer@gmail.com',
		'endereco' => utf8_decode('Gravatá-PE')
	]
];

// Abre o arquivo
$arquivo = fopen('file.csv', 'w');

// Escrevendo o cabesalho do arquivo
fputcsv($arquivo, $cabecalho, ';');

// Escrevendo o conteúdo do arquivo
foreach ($usuarios as $usuario){
	fputcsv($arquivo, $usuario);
}

// Fechando o arquivo

fclose($arquivo);

