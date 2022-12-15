<?php

require_once 'src/autoload.php';

use Alura\Banco\{
    Service\ControllerBonificacoes,
    Modelo\Conta\Titular,
    Modelo\Conta\Conta,
    Modelo\Conta\ContaPoupanca,
    Modelo\Conta\ContaCorrente,
    Modelo\Funcionario\Diretor,
	Modelo\Funcionario\Gerente,
    Modelo\Funcionario\Desenvolvedor,
    Modelo\Funcionario\EditorVideo,
    Modelo\Pessoa\Endereco,
    Modelo\Pessoa\Cpf
};

$endereco = new Endereco('Pernambuco','Gravatá','Boa Vista','qualuqer','97');
$cpfEduardo = new cpf('123.456.789-10');
$eduardo = new Titular($cpfEduardo, "Eduardo", endereco: $endereco);
$contaEduardo = new ContaCorrente($eduardo);
$contaEduardo->depositar(2000);

$cpfBrenda = new cpf('193.413.759-02');
$brenda = new Titular($cpfBrenda, "Brenda", endereco: $endereco);
$contaBrenda = new ContaPoupanca($brenda);
$contaBrenda->depositar(1500);
$contaEduardo->transferir(500, contaDestino: $contaBrenda);

$cpf = new cpf('213.187.637-56');
$endereco2 = new Endereco('Pernambuco','Gravatá','qualquer','qualquer','122B');
$evelyn = new Titular($cpf, "Evelyn", $endereco2);
$contaEvelyn = new ContaPoupanca($evelyn);
$contaEvelyn->depositar(1500);
$contaEduardo->transferir(500, contaDestino: $contaEvelyn);

$desenvolvedor = new Desenvolvedor('Eduard', new Cpf('123.456.789-10'), '1000');
$desenvolvedor->alteraNome('Eduardo');
$desenvolvedor->sobeDeNivel();

$diretor = new Diretor('Brenda', new Cpf('987.654.321-10'),'4000');

$gerente = new Gerente('Evelyn', new Cpf('321.654.987-10'), '3000');

$editor = new EditorVideo('Evelyn', new Cpf('321.654.987-10'), '1000');

$controlador = new ControllerBonificacoes();
$controlador->adicionaBonificacaoDe($diretor);
$controlador->adicionaBonificacaoDe($gerente);
$controlador->adicionaBonificacaoDe($desenvolvedor);
$controlador->adicionaBonificacaoDe($editor);

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
        <th>Endereço</th>
        <th>SALDO</th>
        <th style="border: 0 solid;">Total de Contas</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $contaEduardo->cpf ?></td>
        <td><?= $contaEduardo->nome ?></td>
        <td><?= $endereco->estado ?></td>
        <td><?= $endereco ?></td>
        <td><?= 'R$ ' .$contaEduardo->saldo ?></td>
	    <td style="border: 0 solid;"><?= Conta::recuperaTotalDeContas() ?></td>
    </tr>
    
    <tr>
        <td><?= $contaBrenda->cpf ?></td>
        <td><?= $contaBrenda->nome ?></td>
        <td><?= $endereco->estado ?></td>
        <td><?= $endereco ?></td>
        <td><?= 'R$ ' .$contaBrenda->saldo ?></td>
    </tr>
    
    <tr>
        <td><?= $contaEvelyn->cpf ?></td>
        <td><?= $contaEvelyn->nome ?></td>
        <td><?= $contaEvelyn->titular->recuperaEndereco('estado') ?></td>
        <td><?= $endereco2 ?></td>
        <td><?= 'R$ ' .$contaEvelyn->saldo ?></td>
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
        <th>Salário</th>
        <th>Bonificação</th>
        <th>Total De Bonificações</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td><?= $desenvolvedor->email ?></td>
        <td><?= $desenvolvedor->nome ?></td>
        <td><?= $desenvolvedor->cargo ?></td>
        <td><?= 'R$ ' .$desenvolvedor->salario ?></td>
        <td><?= 'R$ ' .$desenvolvedor->calculaBonificacao() ?></td>
    </tr>
    
    <tr>
        <td><?= $diretor->email ?></td>
        <td><?= $diretor->nome ?></td>
        <td><?= $diretor->cargo ?></td>
        <td><?= 'R$ ' .$diretor->salario ?></td>
        <td><?= 'R$ ' .$diretor->calculaBonificacao() ?></td>
    </tr>
    
    <tr>
        <td><?= $gerente->email ?></td>
        <td><?= $gerente->nome ?></td>
        <td><?= $gerente->cargo ?></td>
        <td><?= 'R$ ' .$gerente->salario ?></td>
        <td><?= 'R$ ' .$gerente->calculaBonificacao() ?></td>
    </tr>
    
    <tr>
        <td><?= $editor->email ?></td>
        <td><?= $editor->nome ?></td>
        <td><?= $editor->cargo ?></td>
        <td><?= 'R$ ' .$editor->salario ?></td>
        <td><?= 'R$ ' .$editor->calculaBonificacao() ?></td>
        <td style="border: 0 solid;"><?= 'R$ ' .$controlador->recuperaTotal() ?></td>
    </tr>
    </tbody>
</table>

</body>
</html>

