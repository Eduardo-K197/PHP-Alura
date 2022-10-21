<?php

namespace Alura\Banco\Modelo;

/**
 * Class Endereco
 * @package Alura\Banco\Modelo
 * @property-read string $estado
 * @property-read string $cidade
 * @property-read string $bairro
 * @property-read string $rua
 * @property-read string $numero
 * @property $nome
 */

trait AcessoPropiedades
{
	public function __get(string $nomeAtributo)
	{
		$metodo = 'recupera' . ucfirst($nomeAtributo);
		return $this->$metodo();
	}
}