<?php

$notasBimestre1 = [
	"Brenda" => 10,
	"Evelyn" => 8,
	"João" => 6,
	"Pamela" => 8,
	"Everton" => 9
];

$notasBimestre2 = [
	"Brenda" => 10,
	"Evelyn" => 8,
	"Everton" => 9
];

$faltasAlunos = array_diff_assoc($notasBimestre1, $notasBimestre2);  // array_diff() diferença entre arrays visando os dados, array_diff_key()diferença entre arrays visando os indecis.
$nomesAlunos = array_keys($faltasAlunos);                           // array_combine() combinas chaves(indecis) e dados de um vetor,
$notasAlunos =array_values($faltasAlunos);                        // array_diff_assoc uni as duas informações os dados e os indecis,array_keys pega só os dados de uma lista.
var_dump(array_combine($notasAlunos, $nomesAlunos));			 // array_values pega so os valores da lista.
var_dump(array_flip($faltasAlunos));                            // array_flip() inverte chaves e valores de uma lista