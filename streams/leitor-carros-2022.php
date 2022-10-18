<?php

$arquivo = fopen('Carros 2022.txt', 'r'); // filename: é o nome do arquivo, mode: r significa read

while (!feof(stream:$arquivo)){
	//fread ler o arquivo todo, fopen abri o arquvi, fclose fecha o arquvio, filesize diz o tamanho do arquivo.
	$tamanhoArquivo = filesize('Carros 2022.txt');
	$curso = fread(stream: $arquivo, length: $tamanhoArquivo);
	echo $curso;
}

echo "<br><br><br><br>";

$arquivo = fopen('Carros 2022.txt', 'r');
//fgets ler o arquivo linha a linha
while (!feof(stream:$arquivo)){
	
	$curso = fgets(stream: $arquivo);
	echo "<br>";
	echo $curso;
}

fclose($arquivo);

echo "<br><br><br>";

$carros = file("Carros 2022.txt"); // file_get_contents ler conteudo do arquivo. file retorna um array cada linha do arquivo é um indice

foreach ($carros as $carro) {
	$carro = $carro . "<br>";
	echo $carro;
}
// $carros is now array(2, 4, 6, 8)
unset($carro); // quebra a referência com o último elemento
