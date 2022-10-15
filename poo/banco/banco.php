<?php

require_once "src/Contas.php";
require_once "src/Titular.php";
require_once "src/Cpf.php";

$cpfEduardo = new cpf('123.456.789-10');
$eduardo = new Titular($cpfEduardo, "Eduardo");
$conta1 = new Conta($eduardo);
$conta1->depositar(1000);

$cpfBrenda = new cpf('193.413.759-02');
$brenda = new Titular($cpfBrenda, "Brenda");
$conta2 = new Conta($brenda);
$conta2->depositar(1500);

$cpf = new cpf('213.187.637-56');
$evelyn = new Titular($cpf, "Evelyn");
$conta3 = new Conta($evelyn);
$conta3->depositar(1500);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Banco</title>
    <style>
        table, th, td {
            border: 1px solid;
	        text-align: center;
        }
    </style>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>CPF</th>
        <th>NOME</th>
        <th>SALDO</th>
        <th style="border: 0 solid;">Total de Contas</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $conta1->recuperaCpf() ?></td>
        <td><?= $conta1->recuperaNome() ?></td>
        <td><?= $conta1->recuperaSaldo() ?></td>
	    <td style="border: 0 solid;"><?= Conta::recuperaTotalDeContas() ?></td>
    </tr>
    
    <tr>
        <td><?= $conta2->recuperaCpf() ?></td>
        <td><?= $conta2->recuperaNome() ?></td>
        <td><?= $conta2->recuperaSaldo() ?></td>
    </tr>
    
    <tr>
        <td><?= $conta3->recuperaCpf() ?></td>
        <td><?= $conta3->recuperaNome() ?></td>
        <td><?= $conta3->recuperaSaldo() ?></td>
    </tr>
    </tbody>
</table>
</body>
</html>

