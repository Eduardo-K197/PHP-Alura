<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador
{
	public function tentaLogin(Autenticavel $autenticavel, string $senha): void
	{
		if ($autenticavel->podeAutentica($senha)) {
			echo "Login efetuado com sucesso!";
			echo "<script>location.href = '../banco/banco.php'</script>";
		}else
			echo "Senha invalida!";
	}
}


