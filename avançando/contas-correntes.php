<?php
$conta1 = [
	'nome' => 'Vinicius',
	'saldo' => 20
	];
$conta2 = [
	'nome' => 'Eduardo',
	'saldo' => 60
	];
$conta3 = [
	'nome' => 'Brenda',
	'saldo' => 40
	];

$contasCorrentes = [$conta1, $conta2, $conta3];

for ($i = 0; $i < count($contasCorrentes); $i++){
	echo $contasCorrentes[$i]['nome'] . '<br><br>';
}