<?php

namespace Alura\Banco\Modelo\Pessoa;

use Alura\Banco\Modelo\AcessoPropiedades;

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

final class Endereco
{
	use AcessoPropiedades;
	private string $estado;
	private string $cidade;
	private string $bairro;
	private string $rua;
	private string $numero;
	
	public function __construct(string $estado, string $cidade, string $bairro, string $rua, string $numero)
	{
		$this->estado = $estado;
		$this->cidade = $cidade;
		$this->bairro = $bairro;
		$this->rua = $rua;
		$this->numero = $numero;
	}
	
	public function recuperaEstado(): string
	{
		return $this->estado;
	}
	
	public function recuperaCidade(): string
	{
		return $this->cidade;
	}
	
	public function recuperaBairro(): string
	{
		return $this->bairro;
	}
	
	public function recuperaRua(): string
	{
		return $this->rua;
	}
	
	public function recuperaNumero(): string
	{
		return $this->numero;
	}
	
	public function __toString(): string
	{
		return "$this->cidade, $this->bairro, $this->rua, $this->numero";
	}
//	public function alteraCidade($novaCidade): void
//	{
//		$this->cidade = $novaCidade;
//	}
//
//	public function __set($nomeAtributo, $value): void
//	{
//		$metodo = 'altera' . ucfirst($nomeAtributo);
//		$this->$metodo($value);
//
//	}
}