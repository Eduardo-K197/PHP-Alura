<?php

$notas = [
	"Brenda" => 10,
	"Evelyn" => 9,
	"João" => 8,
	"Pamela" => 7,
	"Everton" => 6
];

arsort($notas); // sort() ordena os intens do vetor do menor para o maior, rsort() ordena os intens do array do maior para o menor. ou seja o inverso do sort().
var_dump($notas); // asort() ordena os intens do vetor(array) e mantem os indeces, ksort() ordena os intens do array ultilisando os indecis do vetor.

if (is_array($notas)) //gettype() retorna o tipo do dado passado, is_array() retorna se o valor passado é um array.
	echo PHP_EOL . " <br><br>È um vetor<br>" . PHP_EOL;
else
	echo "Não é um array";
echo "<br>";
var_dump(array_is_list($notas)); //array_is_list() verifica se o vetor é númerico começa com 0 e não pula nehum indeci. podendo assim usar um for por exemplo.
echo "<br><br>";

echo "Fez a prova?<br>";
foreach ($notas as $nome => $nota) {
	if ($nome === "Brenda")
		echo "Brenda fez a prova!!!";
}

echo "<br><br>";
echo "Existe na lista o aluno Brenda?<br>";
var_dump(array_key_exists("Brenda", $notas)); //array_key_exists verifica se um indece existe no vetor, assim como fiz com o foreach acima.

echo "<br><br>";
echo "alguém tirou 10?<br>";
var_dump(in_array(10, $notas, true)); // in_array verificar se existe o valor passado dentro do vetor(lista).

echo "<br><br>";
echo "quem tirou 10?<br>";
echo array_search(10, $notas); //array_search busca a chave da lista caso ela exista.
