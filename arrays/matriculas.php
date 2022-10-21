<?php

$alunos2021 = [
	'Vinicius',
	'João',
	'Ana',
	'Roberto',
	'Maria',
];

$novosAlunos = [
	'Patricia',
	'Nico',
	'Kilderson',
	'Daiane',
];

$alunos2022 = [...$alunos2021, 'Carlos Vinicius', ...$novosAlunos];// array_merge() adiciona dados de duas lista,
						// OBS: $alunos2021 + $novoAlunos tambem da certo porem tem que ter os indeces declarados.
array_push($alunos2022, 'Eloisa', 'Pedro', 'Darlan');  //array_push() adiciona valores a lista.

$alunos2022[] = 'Marilha'; // Melhor forma de adicionar um único array.

array_unshift($alunos2022, 'Brenda', 'Vitoria', 'Roberta');  // array_unshift() adiciona um dado no início do array.

array_pop($alunos2022); // Remove o ultimo dado do vetor.

var_dump($alunos2022);
