<?php

$dados = [
	'nome' => 'Eduardo',
	'nota' =>'10',
	'idade' =>'17'];

//[$nome, $nota, $idade] = $dados; // or list($nome, $nota, $idade) = $dados; cria vareaveis com os dados do array.

extract($dados); // extrai os indeces dos dados e joga eles em variaveis existentes.

echo $nome .PHP_EOL . $idade .PHP_EOL . $nota .PHP_EOL;
echo '<br><br><br>';
$contas = [
	[
		'titular' => 'Carlos Eduardo',
		'saldo' => 100
	],
	[
		'titular' => 'Brenda Emilly',
		'saldo' => 1000
	],
	[
		'titular' => 'João da Silva',
		'saldo' => 800
	],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
	echo "$titular possui $saldo reais <br>";
}

echo '<br><br><br>';

extract($contas[0]);


$conta = compact('titular', 'saldo'); // compacta as vareaveis e forma um array.

foreach ($contas as $conta) {
	echo "$titular possui $saldo reais";
	break;
}



