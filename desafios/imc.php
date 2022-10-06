<?php

//Menos do que 18,5	Abaixo do peso
//Entre 18,5 e 24,9	Peso normal
//Entre 25 e 29,9	Sobrepeso
//IMC = Peso ÷ (Altura × Altura)
function imc($altura, $peso): void
{

    $imc = $peso / $altura ** 2;
    echo "Seu IMC é de $imc. Você esta com o IMC ";

    if ($imc < 18.5)
        echo " abaixo";
    elseif ($imc < 25)
        echo " dentro";
    else
        echo " acima";
    echo " do recomendado!";
}

if(isset($_POST['enviar'])) {
 
	$nome = $_POST['nome'];
	$altura = $_POST['altura'];
	$peso = $_POST['peso'];
	
	$erro = array();
	if(empty($nome))
		$erro[] = "Preencha o nome";
	if(empty($altura))
		$erro[] = "Preencha o altura";
	if(empty($peso))
		$erro[] = "Preencha o peso";
  
}
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
<form action="" method="post">
    <label for="nome">Nome: </label><input  id="nome" name="nome" value="<?php if (isset($_POST['enviar'])) echo $_POST['nome']; ?>" type="text"><br>
    <label for="peso">Peso: </label><input  id="peso" name="peso" value="<?php if (isset($_POST['enviar'])) echo $_POST['peso']; ?>" type="text"><br>
    <label for="altura">Altura: </label><input  id="altura" name="altura" value="<?php if (isset($_POST['enviar'])) echo $_POST['altura']; ?>" type="text"><br><br>
    <input name="enviar" type="submit"><br><br>
	<?php
    if (isset($_POST['enviar'])) {
	    if (isset($erro) && count($erro) > 0) {
		    foreach ($erro as $e) {
			    echo "$e<br>";
		    }
	    }
	    if (count($erro) == 0)
		    imc($altura, $peso);
    }
	?>
</form>

</body>
</html>
