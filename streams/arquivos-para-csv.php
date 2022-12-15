<?php

$carros2022 = file('carros-php.txt');

$arquivoCsv = fopen('carros.csv', 'w');

foreach ($carros2022 as $carro){
	$linha = [trim(utf8_decode($carro))];
	$deuCerto = fputcsv($arquivoCsv, $linha, ';');
}
if ($deuCerto)
	echo "Boa";
else
	echo "Sias";

fclose($arquivoCsv);