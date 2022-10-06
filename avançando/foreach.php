<?php

$contasCorrentes = [
	25325426810 => [
		'nome' => 'Vinicius',
		'saldo' => 20
	],
	15683210402 => [
		'nome' => 'Eduardo',
		'saldo' => 60
	],
	15760354418 => [
		'nome' => 'Brenda',
		'saldo' => 40
	]
];
$contasCorrentes["12345678910"] = ['nome' => 'claudia', 'saldo' => 65];

foreach ($contasCorrentes as $cpf => $conta){
	echo $cpf . "<br>";
}
