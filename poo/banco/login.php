<?php

use Alura\Banco\Modelo\Funcionario\Desenvolvedor;
use Alura\Banco\Modelo\Funcionario\Diretor;
use Alura\Banco\Modelo\Funcionario\EditorVideo;
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Modelo\Pessoa\Cpf;
use Alura\Banco\Service\Autenticador;
use Alura\Banco;

require_once 'src/autoload.php';

$autenticador = new Autenticador();

function logar($cargo, $autenticador): void
{
	if ($cargo) {
		$senha = $_POST['senha'];
		$autenticador->tentaLogin(autenticavel: $cargo, senha: $senha);
	}
}

if (isset($_POST['enviar'])) {
	$cargo = $_POST['cargo'];
	switch ($cargo) {
		case "desenvolvedor":
			$desenvolvedor = new Desenvolvedor('Eduardo', new Cpf('123.456.789-10'), '1000');
			logar($desenvolvedor, $autenticador);
			break;
		case "diretor":
			$diretor = new Diretor('Brenda', new Cpf('987.654.321-10'), '4000');
			logar($diretor, $autenticador);
			break;
		case "gerente":
			$gerente = new Gerente('Evelyn', new Cpf('321.654.987-10'), '3000');
			logar($gerente, $autenticador);
			break;
		case "editor":
			$editor = new EditorVideo('Evelyn', new Cpf('321.654.987-10'), '1000');
			logar($editor, $autenticador);
			break;
		default:
			echo "Usuario invalido!";
	}
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
<form action="" method="post">
    <label>Cargo:
        <input type="text" name="cargo">
    </label>

    <label>Senha:
        <input type="text" name="senha">
    </label>

    <input name="enviar" value="Enviar" type="submit">
</form>

</body>
</html>
