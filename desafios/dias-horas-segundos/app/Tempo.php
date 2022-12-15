<?php

class Tempo
{
	private const ano = 365;
	private const mes = 12;
	private const dia = 24;
	private const hora = 60;
	private const minuto = 60;
	
	public function recuperaDataAtual(): DateTime
	{
		return new DateTime();
	}
	
	public function recuperaDia($ano): int
	{
		return ($ano * self::ano);
	}
	
	public function recuperaMes($ano): int
	{
		
		return ($ano * self::mes);
	}
	
	public function recuperaHora($dia): int
	{
		return ($dia * self::dia);
	}
	
	public function recuperaMinuto($dia): int
	{
		return ($dia * self::dia * self::hora);
	}
	
	public function recuperaSegundo($dia): int
	{
		return ($dia * self::dia * self::hora * self::minuto);
	}
	
	public function converteData(string $data, string $unidadeTempo = ''): int
	{
		$data = array_combine(keys: explode(':', 'ano:mes:dia'), values: explode('-', $data));
		
		$resposta = $this->recuperaHora($data['dia']);
		
		if ($unidadeTempo == 'ano') {
			$resposta = $this->recuperaDia($data['ano']);
		}
		
		if ($unidadeTempo == 'mes') {
			$anoAtual = date("Y");
			$resposta = $this->recuperaMes($anoAtual - $data['ano']);
		}
		
		if ($unidadeTempo == 'minuto') {
			$resposta = $this->recuperaMinuto($data['dia']);
		}
		
		if ($unidadeTempo == 'segundo') {
			$resposta = $this->recuperaSegundo($data['dia']);
		}
		
		return $resposta;
	}
	
	/**
	 * @throws Exception
	 */
	public function diferencaEntreDatas($data, $unidadeTempo): string
	{
		$date = new DateTime($data);
		$dataAtual = $this->recuperaDataAtual();
		$resultado = $date->diff($dataAtual);
		$deuCerto = "";
		if ($unidadeTempo == 'mes')
			$deuCerto = $this->converteData($data, $unidadeTempo) + $resultado->m . " Meses";
		
		if ($unidadeTempo == 'total' && $resultado->y > 1)
			$deuCerto = $resultado->format("Estamos juntos a: %y anos %m meses %d dias %h horas %i minutos %s segundos");
		
		if ($unidadeTempo == 'total' && $resultado->y == 1)
			$deuCerto = $resultado->format("Estamos juntos a: %y ano %m meses %d dias %h horas %i minutos %s segundos");
		
		if ($unidadeTempo == 'dia')
			$deuCerto = $resultado->days . " Dias";
		
		if ($unidadeTempo == 'ano')
			$deuCerto = "Mais de " . $resultado->y . " Ano";
		
		if ($unidadeTempo == 'ano' && $resultado->y > 1)
			$deuCerto = "Mais de " . $resultado->y . " Anos";
		
		return $deuCerto;
	}
}