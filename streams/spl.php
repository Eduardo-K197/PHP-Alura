<?php

$arquivo = new SplFileObject('carros.csv');

//foreach ($arquivo as $linha)
//	echo  $linha . "<br>";


while (!$arquivo->eof()){
	$linha = $arquivo->fgetcsv(';');
	echo mb_convert_encoding(string: $linha[0], to_encoding: 'UTF-8', from_encoding: 'Windows-1252') . PHP_EOL;
}

$data = new DateTime();
$data->setTimestamp($arquivo->getCTime());

echo  $data->format("d/m/Y");

