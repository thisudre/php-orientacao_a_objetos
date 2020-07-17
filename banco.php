<?php

require_once 'autoload.php';

use Alura\Banco\Modelo\{CPF,Endereco};
use Alura\Banco\Modelo\Conta\{Titular, ContaCorrente, ContaPoupanca};
use Alura\Banco\Modelo\Funcionario\Gerente;
use Alura\Banco\Service\Autenticador;

$funcionario = new Gerente('Thiago', new CPF('123.456.234-34'), 2000);
$autenticador = new Autenticador;

$autenticador->tentarLogin($funcionario, '1244');

$end = new Endereco("Brasilia", "Santa Maria", "Alagados", "10");

echo $end . PHP_EOL;