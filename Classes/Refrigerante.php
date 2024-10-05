<?php

require_once 'Bebida.php';

class Refrigerante extends Bebida {
    // Atributos
    private $retornavel;

    // SET
    public function setRetornavel($retornavel) {
        $this->retornavel = $retornavel;
    }

    // GET
    public function getRetornavel() {
        return $this->retornavel;
    }

    // Métodos
    public function mostrarBebida() {
        return "Nome: {$this->getNome()}, Preço: R$ {$this->getPreco()}, Retornável: {$this->getRetornavel()}";
    }

    public function verificaPreco() {
        $resultado = false;
        if($this->getPreco() < 5){
            $resultado = true;
        }
        return $resultado;
    }
}
?>
