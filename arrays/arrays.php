<?php

$array = [
	'um',
	'dois',
	'tres'
];

foreach ($array as $numeral => $nomeNumero) {
	echo "$numeral em português é: $nomeNumero<br>" . PHP_EOL;
}

echo "<br>Total: " . count($array) . PHP_EOL;

var_dump(array_is_list($array));