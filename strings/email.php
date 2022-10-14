<?php

function geraEmail(string $nome): void
{
	$conteudoEmail = <<<FIM
	olá, $nome!
	
	Estamos entrando em contato para
	{motivo do contato}
	
	{assinatura}

FIM;
	echo $conteudoEmail;
}

geraEmail('Carlos Eduardo');