<?php

$telefones = ['(81)99484-6037', '(81)99247-2748', '(81)99802-5703', '(81)99760-9648'];
$regex = '/^\(([0-9]{2})\)(9?[0-9]{4}-[0-9]{4})$/';
foreach ($telefones as $telefone){
	$telefoneValido = preg_match($regex, $telefone, $ddd);
	if ($telefoneValido)
		echo "Telefone valido! ";
	else
		echo "Telefon invalido! ";
	
	$telefoneSubst = preg_replace($regex, '(55) \2', $telefone);
	echo $telefoneSubst . "<br>";
}

echo "<br>";

$data = "2022-06-08";

$dataTransformada = preg_replace('/^([0-9]{4})-([0-9]{2})-([0-9]{2})/', '\3/\2/\1', $data);

echo $dataTransformada;