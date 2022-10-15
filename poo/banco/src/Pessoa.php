<?php

class Pessoa
{
	protected string $nome;
	private Cpf $cpf;
	
	public function __construct(string $nome, Cpf $cpf)
	{
		$this->validaNomeTitular($nome);
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
	
	protected function validaNomeTitular(string $nomeTitular): void
	{
		if (strlen($nomeTitular) <= 5){
			echo "Seu nome precisar ter no mínimo 5 carcteres!";
			exit();
		}
	}
	
	
}