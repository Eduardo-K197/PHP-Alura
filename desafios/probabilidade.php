<?php

function pb1($n, $na): float
{
	return $na / $n;
}

if (isset($_POST['calcula'])) {
	if ($_POST['pb'] == 1) {
		$na = filter_input(INPUT_POST, 'na');
		$n = filter_input(INPUT_POST, 'n');
		$erro = array();
		if (empty($n))
			$erro[] = "Preencha o Número de eventos ocorridos!";
		if (empty($na))
			$erro[] = "Preencha o Número de resultados possíveis!";
		else
			$dados = pb1($n, $na);
	}
	if (isset($_POST['pb']) && $_POST['pb'] == "pbm") {
		$na =  filter_input(INPUT_POST, 'na');   //Número de resultados possíveis
        $na2 = explode(',', filter_input(INPUT_POST, 'na2')); //Segundo Número de eventos ocorridos
        $n = explode(',', filter_input(INPUT_POST, 'n'));      //Número de eventos ocorridos
//		$result = array_intersect($dado['na'], $dado['na2']);
//        print_r($result);
		if (empty($n))
			$erro[] = "Preencha o Número de eventos ocorridos!";
		if (empty($na))
			$erro[] = "Preencha o Número de resultados possíveis!";
		if (empty($na2))
			$erro[] = "Preencha o Segundo Número de eventos ocorridos!";
		else {
			$dados = (($na + $na2) - $na2) - $intercessao;
		}
	}
	
}

?>

<!doctype html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Probabilidade</title>
</head>

<style>
    .input_table tr {
        border: none;
    }

    .input_table tr td {
        text-align: center;
    }

</style>

<body>
<div class="col l12 m12 s12 margin_zero center padding_5">

    <img src="https://calculator-online.net/assets/img/probability.webp" width="45" height="45"
         class="display_inline padding_5 m_b_n_10" alt="Calculadora de probabilidade">
    <h1 class="color_blue left-align font_s25 display_inline"><b>Calculo de Probabilidade</b></h1>
</div>

<p class="padding_5"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Calculando para:</span></span></strong>
</p>
<form action="" method="post">
    <p>
        <label>Calculando para:
            <select name="pb" id="pb">
                <option value="1">Probabilidade Única</option>
                <option value="pbm">Probabilidade de múltiplos eventos</option>
            </select>
        </label></p>
    <p><label>Número de resultados possíveis:
            <input type="text" name="na" value="<?php if (isset($_POST['calcula'])) echo $_POST['na']; ?>">
        </label></p>

    <p><label>Número de eventos ocorridos:
            <input type="text" name="n" value="<?php if (isset($_POST['calcula'])) echo $_POST['n']; ?>">
        </label></p>

    <p id='ne'></p>
    <script>
        let select = document.getElementById('pb');

        select.addEventListener('change', function () {
            if (select.value === "pbm")
                document.getElementById('ne').innerHTML = "<label>Segundo Número de eventos ocorridos: <input type='text' name='na2' value=""> </label>"
            else
                document.getElementById('ne').innerHTML = "";
        })

    </script>

    <input type="submit" value="Calcular" name="calcula">
</form>
<?php
if (isset($_POST['calcula'])) {
	if (isset($erro) && count($erro) > 0) {
		foreach ($erro as $e) {
			echo "$e<br>";
			die();
		}
	}
}
?>
<p><?php if (isset($_POST['pb']) && $_POST['pb'] != "pbm" && $_POST['na'] != "") echo number_format(num: $dados, decimals: 2, decimal_separator: ',', thousands_separator: '.') ?></p>
<p><?php if (isset($_POST['na2']) && $_POST['na2'] != "" && $_POST['pb'] == "pbm") echo $dados ?></p>
</body>
</html>
