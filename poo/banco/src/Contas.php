<?php

class Conta
{
	public Titular $titular; // readonly permite que o objeto seja publico mas só pode ser definido atributos uma unica vez.
	private float $saldo;
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
		if ($valorASacar > $this->saldo) {
			echo "Você não tem saldo suficiente!";
			return;
		}
		$this->saldo -= $valorASacar;
	}
	
	public function depositar(float $valorADepositar): void
	{
		if ($valorADepositar < 0) {
			echo "Você não pode depositar um valor negativo!";
			return;
		}
		$this->saldo += $valorADepositar;
	}
	
	public function transferir(float $valorATransferir, conta $contaDestino): void
	{
		if ($valorATransferir > $this->saldo) {
			echo "Saldo insuficiente!";
			return;
		}
		$this->sacar($valorATransferir);
		$contaDestino->depositar($valorATransferir);
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
	
}

//$criarConta =  new Conta();