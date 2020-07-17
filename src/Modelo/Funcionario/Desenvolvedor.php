<?php

namespace Alura\Banco\Modelo\Funcionario;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class Desenvolvedor extends Funcionario{
    public function calculaBonificacao()
    {
        return 500;
    }
}