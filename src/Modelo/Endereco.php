<?php
namespace Alura\Banco\Modelo;

final class Endereco{
    use Acesso;

    private $cidade;
    private $bairro;
    private $rua;
    private $numero;

    public function __construct(string $cidade, string $bairro, string $rua, string $numero)
    {
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->numero = $numero;
    }

    public function getCidade(){
        return $this->cidade;
    }
    public function getBairro(){
        return $this->bairro;
    }
    public function getRua(){
        return $this->rua;
    }
    public function getNumero(){
        return $this->numero;
    }

    public function __toString():string
    {
        return "{$this->rua}, {$this->numero}, {$this->bairro}, {$this->cidade}";
    }
    
}