<?php

namespace Alura\Banco\Modelo;

interface Autenticavel
{
	public function podeAutentica(string $senha): bool;
}