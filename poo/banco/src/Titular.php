<?php

class Titular extends Pessoa
{
	private Endereco $endereco;
	
	public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
	{
		parent::__construct($nome, $cpf);
		$this->endereco = $endereco;
	}
	
	
	public function recuperaEndereco($dado): string
	{
		$estado = $this->endereco->recuperaEstado();
		$cidade = $this->endereco->recuperaCidade();
		$bairro = $this->endereco->recuperaBairro();
		$rua = $this->endereco->recuperaRua();
		$numero = $this->endereco->recuperaNumero();
		
		if ($dado == 'estado') {
			return $estado;
		} elseif ($dado == 'cidade') {
			return $cidade;
		} elseif ($dado == 'bairro') {
			return $bairro;
		} elseif ($dado == 'rua') {
			return $rua;
		}
		return $numero;
	}
}