<?php

require_once 'Bebida.php';

class Vinho extends Bebida {
    // Atributos
    private $tipo;
    private $safra;

    // SET
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

    public function setSafra($safra) {
        $this->safra = $safra;
    }

    // GET
    public function getTipo() {
        return $this->tipo;
    }

    public function getSafra() {
        return $this->safra;
    }

    // Métodos
    public function mostrarBebida() {
        return "Nome: {$this->getNome()}, Preço: R$ {$this->getPreco()}, Tipo: {$this->getTipo()}, Safra: {$this->getSafra()}";
    }

    public function verificaPreco() {
        $resultado = false;
        if($this->getPreco() < 25){
            $resultado = true;
        }
        return $resultado;
    }
}
?>
