<?php
require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';


$primeiraConta = new Conta (new Titular(new Cpf("123.456.789-10"),"Vinicius"));
$primeiraConta->depositar(500);
$segundaConta = new Conta(new Titular(new Cpf("123.456.789-02"),"lucão"));
$primeiraConta->transferir(300,$segundaConta);



echo "Cpf : " . $primeiraConta->getCpfTitular();
echo "<br>";
echo "Nome do Titular : " . $primeiraConta->getNomeTitular();
echo "<br>";
echo "Saldo : " . $primeiraConta->getSaldo();
echo "<br>";
echo "Numero de contas criadas : " . Conta::getNumeroDeContas();
echo "<br>";

echo "Saldo : " . $segundaConta->getSaldo();

