<?php

namespace Alura\Banco\Modelo\Pessoa;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $estado
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 * @property $nome
 * @property $cargo
 */

use Alura\Banco\Modelo\AcessoPropiedades;

abstract  class Pessoa
{
	use AcessoPropiedades;
	
	protected string $nome;
	private Cpf $cpf;
	
	public function __construct(string $nome, Cpf $cpf)
	{
		$this->validaNome($nome);
		$this->nome = $nome;
		$this->cpf = $cpf;
	}
	
	public function recuperaCpf(): string
	{
		return $this->cpf->recuperaNumero();
	}
	
	public function recuperaNome(): string
	{
		return $this->nome;
	}
	
	final protected function validaNome(string $nomeTitular): void
	{
		if (strlen($nomeTitular) <= 5){
			echo "Seu nome precisar ter no mínimo 5 carcteres!";
			exit();
		}
	}
	
	
}