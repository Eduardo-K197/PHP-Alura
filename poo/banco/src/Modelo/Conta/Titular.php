<?php

namespace Alura\Banco\Modelo\Conta;


use Alura\Banco\Modelo\Autenticavel;
use Alura\Banco\Modelo\Pessoa\Endereco;
use Alura\Banco\Modelo\Pessoa\Cpf;
use Alura\Banco\Modelo\Pessoa\Usuario;

class Titular extends Usuario implements Autenticavel
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
		} if ($dado == 'cidade') {
			return $cidade;
		} if ($dado == 'bairro') {
			return $bairro;
		} if ($dado == 'rua') {
			return $rua;
		}
		return $numero;
	}
	
	public function podeAutentica(string $senha): bool
	{
		return $senha === "abc";
	}
}