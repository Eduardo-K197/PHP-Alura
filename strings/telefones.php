<?php

$telefone = ['(81)99484-6037', '(81)99247-2748', '(81)99802-5703', '(81)99760-9648'];

?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
<h1>
	<table style="border: 1px solid black;">
		<tr>
			<td>
				<?php echo implode("<br><hr>", $telefone); ?> <!-- implode pega os dados do array e junta tudo com um separador definido pelo usuario -->
			</td>
		</tr>
	</table>
</h1>
</body>
</html>
