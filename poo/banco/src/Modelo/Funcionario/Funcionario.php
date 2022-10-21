<?php

namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\{AcessoPropiedades, Pessoa\Cpf, Pessoa\Pessoa};

abstract class Funcionario extends Pessoa
{
	private string $salario;
	
	public function __construct(string $nome, Cpf $cpf, $salario)
	{
		parent::__construct($nome, $cpf);
		$this->salario = $salario;
	}
	
	public function alteraNome(string $nome): void
	{
		$this->validaNome($nome);
		$this->nome = $nome;
	}
	
	public function recuperaSalario(): float
	{
		return $this->salario;
	}
	
	public function recebeAumento(float $valorAumento): void
	{
		if ($valorAumento < 0) {
			echo "Aumento deve ser positivo!";
			return;
		}
		$this->salario += $valorAumento;
	}
	
	abstract public function calculaBonificacao(): float;
}