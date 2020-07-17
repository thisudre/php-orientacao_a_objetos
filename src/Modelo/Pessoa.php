<?php
namespace Alura\Banco\Modelo;
use Alura\Banco\Modelo\CPF;

class Pessoa{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->validaNome($nome);
        $this->nome = $nome;
        $this->cpf =  $cpf;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getCPF()
    {
        return $this->cpf->getNumero();
    }

    final protected function validaNome(string $nomeTitular)
    {
        if (strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}