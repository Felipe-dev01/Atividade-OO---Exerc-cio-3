<?php

require_once 'Bebida.php';

class Suco extends Bebida {
    // Atributo
    private $sabor;

    // SET
    public function setSabor($sabor) {
        $this->sabor = $sabor;
    }

    // GET
    public function getSabor() {
        return $this->sabor;
    }

    // Métodos
    public function mostrarBebida() {
        return "Nome: {$this->getNome()}, Preço: R$ {$this->getPreco()}, Sabor: {$this->getSabor()}";
    }

    public function verificaPreco() {
        $resultado = false;
        if($this->getPreco() < 2.5){
            $resultado = true;
        }
        return $resultado;
    }
}
?>
