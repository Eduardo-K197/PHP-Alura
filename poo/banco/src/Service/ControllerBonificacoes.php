<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\AcessoPropiedades;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControllerBonificacoes
{
	use AcessoPropiedades;
	private int $totalBonificacoes = 0;
	public function adicionaBonificacaoDe(Funcionario $funcionario): void
	{
		$this->totalBonificacoes += $funcionario->calculaBonificacao();
	}
	
	public function recuperaTotal(): float
	{
		return $this->totalBonificacoes;
	}
	
}