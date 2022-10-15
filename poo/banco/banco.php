<?php

require_once "src/Pessoa.php";
require_once "src/Funcionario.php";
require_once "src/Contas.php";
require_once "src/Titular.php";
require_once "src/Cpf.php";
require_once "src/Endereco.php";

$endereco = new Endereco('Pernambuco', 'Gravatá', 'Boa Vista', 'qualuqer', '97');
$cpfEduardo = new cpf('123.456.789-10');
$eduardo = new Titular($cpfEduardo, "Eduardo", endereco: $endereco);
$conta1 = new Conta($eduardo);
$conta1->depositar(2000);

$cpfBrenda = new cpf('193.413.759-02');
$brenda = new Titular($cpfBrenda, "Brenda", endereco: $endereco);
$conta2 = new Conta($brenda);
$conta2->depositar(1500);
$conta1->transferir(500, $conta2);

$cpf = new cpf('213.187.637-56');
$evelyn = new Titular($cpf, "Evelyn", new Endereco('Pernambuco', 'Gravatá', 'qualquer', 'qualquer', '122B'));
$conta3 = new Conta($evelyn);
$conta3->depositar(1500);
$conta1->transferir(500, $conta3);

$umFuncionario = new Funcionario('Eduardo', new Cpf('123.456.789-10'), 'Desenvolvedor');


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
<h2>Clientes</h2>
<table>
    <thead>
    <tr>
        <th>CPF</th>
        <th>NOME</th>
        <th>Estado</th>
        <th>SALDO</th>
        <th style="border: 0 solid;">Total de Contas</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $conta1->recuperaCpf() ?></td>
        <td><?= $conta1->recuperaNome() ?></td>
        <td><?= $conta1->titular->recuperaEndereco('estado') ?></td>
        <td><?= $conta1->recuperaSaldo() ?></td>
	    <td style="border: 0 solid;"><?= Conta::recuperaTotalDeContas() ?></td>
    </tr>
    
    <tr>
        <td><?= $conta2->recuperaCpf() ?></td>
        <td><?= $conta2->recuperaNome() ?></td>
        <td><?= $conta2->titular->recuperaEndereco('estado') ?></td>
        <td><?= $conta2->recuperaSaldo() ?></td>
    </tr>
    
    <tr>
        <td><?= $conta3->recuperaCpf() ?></td>
        <td><?= $conta3->recuperaNome() ?></td>
        <td><?= $conta3->titular->recuperaEndereco('estado') ?></td>
        <td><?= $conta3->recuperaSaldo() ?></td>
    </tr>
    </tbody>
</table>
<h2>Funcionarios</h2>
<table>
    <thead>
    <tr>
        <th>CPF</th>
        <th>NOME</th>
        <th>Cargo</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $umFuncionario->recuperaCpf() ?></td>
        <td><?= $umFuncionario->recuperaNome() ?></td>
        <td><?= $umFuncionario->recuperaCargo() ?></td>
    </tr>
    </tbody>
</table>

</body>
</html>

