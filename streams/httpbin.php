<?php

$contexto = stream_context_create([
	'http' => [
		'method' => 'POST',
		'header' => 'X-From: PHP',
		'content' => 'Teste do corpo da requisição'
	]
]);

echo file_get_contents('https://httpbin.org/post', false, $contexto);