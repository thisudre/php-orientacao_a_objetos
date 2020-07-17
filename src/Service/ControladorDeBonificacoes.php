<?php

namespace Alura\Banco\Service;
use Alura\Banco\Modelo\Funcionario\Funcionario;

class ControladorDeBonificacoes{
    private $totalBonificacoes;

    public function getTotal()
    {
        return $this->totalBonificacoes;
    }

    public function adicionaBonificacao(Funcionario $funcionario)
    {
        $this->totalBonificacoes += $funcionario->calculaBonificacao();
    }

}