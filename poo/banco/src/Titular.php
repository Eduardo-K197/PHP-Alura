<?php

class Titular
{
	public Cpf $cpf;
	private string $nome;
	
	public function __construct(Cpf $cpf, string $nome)
	{
		$this->cpf = $cpf;
		$this->validaNomeTitular($nome);
		$this->nome = $nome;
	}
	
	private function validaNomeTitular(string $nomeTitular): void
	{
		if (strlen($nomeTitular) <= 5){
			echo "Seu nome precisar ter no mínimo 5 carcteres!";
			exit();
		}
	}
	
	public function recuperaNome(): string
	{
		return $this->nome;
	}
	
	public function recuperaCpf(): string
	{
		return $this->cpf->recuperaNumero();
	}
}