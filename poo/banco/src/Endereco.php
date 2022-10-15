<?php

class Endereco
{
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
	
}