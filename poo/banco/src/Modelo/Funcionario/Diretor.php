<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\AcessoPropiedades;
use Alura\Banco\Modelo\Autenticavel;

/**
 * @property $cargo
 * @property $nome
 * @property $email
 * @property $salario
 */

class Diretor extends Funcionario implements Autenticavel
{
	public function calculaBonificacao(): float
	{
		return $this->recuperaSalario() * 2;
	}
	
	public function recuperaCargo(): string
	{
		return "Diretor";
	}
	
	public function podeAutentica(string $senha): bool
	{
		return $senha === '35333145';
	}
}