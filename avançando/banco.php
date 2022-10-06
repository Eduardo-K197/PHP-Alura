<?php

require_once "funcoes.php";

$contasCorrentes = [
	'123.456.789-10' => [
		'titular' => 'Eduardo',
		'saldo' => 10000
	],
	'123.456.689-11' => [
		'titular' => 'Brenda',
		'saldo' => 300
	],
	'123.256.789-12' => [
		'titular' => 'Vinicius',
		'saldo' => 100
	]
];

$contasCorrentes['123.456.789-10'] = sacar(
	$contasCorrentes['123.456.789-10'],
	500
);

$contasCorrentes['123.456.689-11'] = depositar(
	$contasCorrentes['123.456.689-11'],
	2000
);

$contasCorrentes['123.256.789-12'] = depositar(
	$contasCorrentes['123.256.789-12'],
	900
);

unset($contasCorrentes['123.256.789-12']);

titularLetrasMaiusculas($contasCorrentes['123.456.789-10']);
// php -S localhost:8080 sobe um seridor web direto do php.
?>
<!doctype html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Banco</title>
</head>
<body>
	<h1>Contas correntes</h1>
	<?php foreach ($contasCorrentes as $cpf => $contas) {?>
	<dl>
		<dt><h3><?= $contas['titular']; ?> - <?= $cpf;?></dt>
		<dd>Saldo: <?= $contas['saldo']; ?></h3></dd>
	</dl>
    <?php
    }
    ?>
</body>
</html>
