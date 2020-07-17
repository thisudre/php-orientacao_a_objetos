<?php

namespace Alura\Banco\Service;

use Alura\Banco\Modelo\Autenticavel;

class Autenticador{
    public function tentarLogin(Autenticavel $autenticavel, string $senha)
    {
        if ($autenticavel->podeAutenticar($senha)) {
            echo "Usuario logado" . PHP_EOL;
        }
        else{
            echo "Senha incorreta" . PHP_EOL;
        }
    }
}