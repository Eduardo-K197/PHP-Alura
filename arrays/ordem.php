<?php

$notas = [
	[
	'aluno' => 'Maria',
	'nota' => 10,
	],
	[
	'aluno' => 'Vinicius',
	'nota' => 4,
	],
	[
	'aluno' => 'Ana',
	'nota' => 6,
	],
];

function ordenaNotas(array $nota1, $nota2): int
{
	return $nota2['nota'] <=> $nota1['nota'];
	
//	if ($nota1['nota'] > $nota2['nota']) {
//		return -1;
//	}
//	if ($nota2['nota'] > $nota1['nota']) {
//		return 1;
//	}
//
//	return 0;
}

echo "ordenadas";
usort($notas, 'ordenaNotas');
var_dump($notas);
