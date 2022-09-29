<?php
function exibeMensagem(string $mensagem): void
{
	echo $mensagem . "<br>";
}

function depositar(array $conta, float $valorADepositar): array
{
	if ($valorADepositar > 0) {
		$conta['saldo'] += $valorADepositar;
	} else {
		exibeMensagem("Depositos precisam ser positivos");
	}
	return $conta;
}

function sacar(array $conta, float $valorASacar): array
{
	if ($valorASacar > $conta['saldo']) {
		exibeMensagem("Você não tem saldo suficiente");
	} else {
		$conta['saldo'] -= $valorASacar;
	}
	
	return $conta;
}

function titularLetrasMaiusculas(array &$conta): void
{
	$conta['titular'] = mb_strtoupper($conta['titular']);

}

function exibeConta(array $conta): void
{
	['titular' => $titular, 'saldo' => $saldo] = $conta;
	echo "<li>Titular: $titular. Saldo: $saldo</li>";
}

function adiciona2($x): void
{
	$x = $x + 2;
	echo $x;
}

adiciona2(435);