<?php
namespace Alura\Banco\Modelo\Funcionario;

use Alura\Banco\Modelo\Pessoa;
use Alura\Banco\Modelo\CPF;

abstract class Funcionario extends Pessoa{
    private $salario;

    public function __construct(string $nome, CPF $cpf, float $salario)
    {
        parent::__construct($nome, $cpf);
        $this->salario = $salario;
    }

    public function alteraNome(string $novoNome)
    {
        $this->validaNome($novoNome);
        $this->nome = $novoNome;
    }

    public function getSalario()
    {
        return $this->salario;
    }

    abstract public function calculaBonificacao();
}