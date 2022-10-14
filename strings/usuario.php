<?php

$nome = "Carlos Eduardo";
$email = "carloseduardobezerradasilva2@gmail.com";
$senha = "123456"; // strlen Pega o tamanho da string em bits.
$posicaoDoArroba = mb_strpos($email, '@'); //  strpos() pega um caractere de uma string.

if (mb_strlen($senha) < 8)
	echo "Sua senha deve conter no mínimo 8 caracteres!<br>";

$usuario = substr($email, 0, $posicaoDoArroba); // substr pega uma parte de uma string de acordo com a posição inicial ate á final.

echo mb_strtoupper($usuario); //strtoupper cria uma copia do valor passado e retorna ele todo maiúsculo.
$string = "EDUARDÓ";  //mb_str o mb_ ele trabalha com caracteres multbites como letras com acentuação por exemplo.
echo "<br>";
echo mb_strtolower($string); //strtolower cria uma copia do valor passado e retorna ele todo minúsculo.
echo "<br>";

echo substr($email, $posicaoDoArroba + 1);

list($name, $sobrenome) = explode( ' ', $nome);

echo "<br><br>Nome: $name<br>";
echo "Sobrenome: $sobrenome ";
