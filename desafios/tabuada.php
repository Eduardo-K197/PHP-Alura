<?php


function tabuada($numb): void
{
	for ($i = 1; $i <= 10; $i++) {
		$resultado = $numb * $i;
        
        echo "<tr><td> $numb X $i = $resultado</td></tr>";
	}
}

$dados = filter_input_array(INPUT_POST);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tabuada</title>
</head>
<body>
<style>
    *{
        padding: 0;
        
    }
    #div1 {
        display: flex;
    }
    table {
        border: 1px solid #000;
        flex-shrink:0;
    }
</style>

<form method="post" style="text-align: center">
	<?php
	if (isset($_POST['numb'])) {
		$numb = "";
		$numb = $_POST['numb'];
	}
	?>
    <h1>
        <label for="numb">Tabuada: </label>
        <input type="number" required name="numb" id="numb" value="<?php echo $numb ?>"
               placeholder="Digite o número para saber a tabuada do msm.">
        <button type="submit">play</button>
    </h1>
</form>
<h1 style="text-align: center">Pesquisar entre as tabuadas
<form style="text-align: center" action="" method="post">
	<?php
	if (isset($_POST['tb1']) && isset($_POST['tb2'])) {
		$tb1 = "";
		$tb1 = $_POST['tb1'];
		$tb2 = "";
		$tb2 = $_POST['tb2'];
	}
	?>
    <label for="tb1">Primeira Tabuada</label>
    <input id="tb1" type="number" value="<?php echo $tb1 ?>" name="tb1">
    <label for="tb2">Última Tabuada</label>
    <input type="number" id="tb2" value="<?php echo $tb2 ?>" name="tb2">

    <input type="submit" value="pesquisar" name="pesquisarEntreTabuada">
</form>
</h1>
<?php
if (isset($dados['pesquisarEntreTabuada'])) {
	$tb1 = $_POST['tb1'];
	$tb2 = $_POST['tb2'];
}


?>

<h5 style="text-align: center">
    <a href="tabuada.php">
        <button type="button">reset</button>
    </a>
</h5>
<h1>
    <div id='div1'>
		<?php if (!empty($_POST['numb'])){
		$numb = $_POST['numb']; ?>
            <?php echo "<table id='table1' align='center' border='1' cellpadding='12'>"; ?>
        
            <th>
				<?php echo $_POST['numb']; ?>
            </th>
        
            <?php tabuada($numb); ?>
            
	<?php } ?>
    </div>
</h1>
<h1>
<div id='div1'>
		<?php if (!empty($dados['pesquisarEntreTabuada']))
            for ($tb1 = 1; $tb1 <= $tb2; $tb1++) {
            echo "<table id='table1' border='1' align='center'> <thead><tr><th> $tb1</th></tr></thead>";
            
tabuada($tb1, $tb1);
echo "</table>";
} ?>
</div>
</h1>
</body>
</html>
