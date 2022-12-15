<?php

namespace Alura\Banco\Modelo\Funcionario;



use Alura\Banco\Modelo\Autenticavel;

/**
 * @property $cargo
 * @property $email
 * @property $nome
 * @property $salario
 */
class EditorVideo extends Funcionario implements Autenticavel
{
	public function calculaBonificacao(): float
	{
		return $this->recuperaSalario();
	}
	
	public function recuperaCargo(): string
	{
		return "Editor";
	}
	
	public function podeAutentica(string $senha): bool
	{
		return $senha === "2510";
	}
}