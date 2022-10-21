<?php

namespace Alura\Banco\Modelo\Pessoa;

use Alura\Banco\Modelo\AcessoPropiedades;

final class Cpf
{
	use AcessoPropiedades;
	protected string $numero;
	
	public function __construct(string $numero)
	{
		$this->numero = $numero;
		$this->validaNumero($numero);
	}
	
	public function recuperaNumero(): string
	{
		return $this->numero;
	}
	
	public function validaNumero(string $numero): void
	{
		$numero = filter_var($numero, FILTER_VALIDATE_REGEXP, [
			'options' => [
				'regexp' => '/^[0-9]{3}\.[0-9]{3}\.[0-9]{3}\-[0-9]{2}$/'
			]
		]);
		
		if ($numero === false) {
			echo "CPF invalido!";
			exit();
		}
		$this->numero = $numero;
	}
}