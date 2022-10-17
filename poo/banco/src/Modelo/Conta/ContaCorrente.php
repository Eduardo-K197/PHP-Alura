<?php

namespace Alura\Banco\Modelo\Conta;

/**
 * @property $saldo
 * @property $cpf
 * @property $nome
 */
class ContaCorrente extends Conta
{
	protected function percentualTarifa(): float
	{
		return 0.05;
	}
	
	public function transferir(float $valorATransferir, conta $contaDestino): void
	{
		if ($valorATransferir > $this->saldo) {
			echo "Saldo insuficiente!";
			return;
		}
		$this->sacar($valorATransferir);
		$contaDestino->depositar($valorATransferir);
	}
}