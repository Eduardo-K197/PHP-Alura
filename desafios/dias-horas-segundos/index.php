<?php

require "app/Tempo.php";

$data = new Tempo();
if (isset($_POST['data'])) {
	try {
		$deuCerto = $data->diferencaEntreDatas($_POST['data'], $_POST['unidadeTempo']);
	} catch (Exception $e) {
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
    <title>I LOVE YOU</title>
</head>
<body>
<h1>Estamos Juntos desde ?</h1>
<form action="" method="post">

    <div>
        <label for="date">Data</label>
        <input value="<?php if (isset($_POST['data'])) echo $_POST['data']; ?>" type="date" id="date" name="data"
               placeholder="20/20/2020">

        <label for="unidadeTempo"></label>
        <select name="unidadeTempo" id="unidadeTempo">
            <option value="total">Total</option>
            <option value="ano">Ano</option>
            <option value="mes">Mes</option>
            <option value="dia">Dia</option>
        </select>
    </div>
    <br><br>
    <div>
        <button type="submit">Pesquisar</button>
    </div>

</form>
<br>
<div>
	
	<?php
	if (isset($deuCerto))
		echo $deuCerto;
	?>
</div>

</body>
</html>
