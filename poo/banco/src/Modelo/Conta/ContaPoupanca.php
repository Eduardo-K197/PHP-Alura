<?php

namespace Alura\Banco\Modelo\Conta;

/**
 * @property $saldo
 * @property $cpf
 * @property $nome
 */
class ContaPoupanca extends Conta
{
	protected function percentualTarifa(): float
	{
		return 0.03;
	}
}