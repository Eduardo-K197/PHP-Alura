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
//  if ($nota2['nota'] === $nota1['nota'])
//	    return 0;
}

echo "ordenadas";
usort($notas, 'ordenaNotas'); //usort() função que recebe dois parámentros o array e a função que ordena esse array e deve ser passada o nome da mesma dentro de aspas.
var_dump($notas);
