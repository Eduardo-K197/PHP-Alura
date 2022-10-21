<?php

namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\AcessoPropiedades;

abstract class Conta
{
	use AcessoPropiedades;
	public Titular $titular; // readonly permite que o objeto seja publico mas só pode ser definido atributos uma unica vez.
	protected float $saldo;
	private static int $numeroDeContas = 0;
	
	public function __construct(Titular $titular)
	{
		$this->titular = $titular;
		$this->saldo = 0;
		self::$numeroDeContas++;
	}
	
	public function __destruct()
	{
		self::$numeroDeContas--;
	}
	
	public function sacar(float $valorASacar): void
	{
		
		$tarifaSaque = $valorASacar * $this->percentualTarifa();
		$valorSaque = $valorASacar + $tarifaSaque;
		if ($valorSaque > $this->saldo) {
			echo "Você não tem saldo suficiente!";
			return;
		}
		$this->saldo -= $valorSaque;
	}
	
	public function depositar(float $valorADepositar): void
	{
		if ($valorADepositar < 0) {
			echo "Você não pode depositar um valor negativo!";
			return;
		}
		$this->saldo += $valorADepositar;
	}
	
	public function recuperaSaldo(): string
	{
		return $this->saldo;
	}
	
	public static function recuperaTotalDeContas(): int
	{
		return self::$numeroDeContas;
	}
	
	public function recuperaCpf(): string
	{
		return $this->titular->recuperaCpf();
	}
	
	public function recuperaNome(): string
	{
		return $this->titular->recuperaNome();
	}
	
	abstract protected function percentualTarifa(): float;
	
}