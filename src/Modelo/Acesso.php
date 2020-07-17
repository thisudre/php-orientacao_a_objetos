<?php

namespace Alura\Banco\Modelo;

/**
 * 
 */
trait Acesso
{
    public function __get(string $nomeAtributo)
    {
        $metodo = 'get' . ucfirst($nomeAtributo);
        return $this->$metodo();
    }
}
