<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\AcessoPropiedades;
use Alura\Banco\Modelo\Autenticavel;

/**
 * @property $cargo
 * @property $nome
 * @property $salario
 * @property $email
 * @property $bonificaco
 */
class Desenvolvedor extends Funcionario implements Autenticavel
{
	use AcessoPropiedades;
	public function sobeDeNivel(): void
	{
		$this->recebeAumento($this->recuperaSalario() * 0.75);
	}
	
	public function calculaBonificacao(): float
	{
		return $this->recuperaSalario() * 0.1;
	}
	
	public function recuperaCargo(): string
	{
		return "Desenvolvedor";
	}
	
	public function podeAutentica(string $senha): bool
	{
		return $senha === "27042005";
	}
}