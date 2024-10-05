<?php

abstract class Bebida {

    private $nome;
    private $preco;

    // SETs
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function setPreco($preco) {
        $this->preco = $preco;
    }

    // GETs
    public function getNome() {
        return $this->nome;
    }

    public function getPreco() {
        return $this->preco;
    }

    // Métodos abstratos
    abstract public function mostrarBebida();

    abstract public function verificaPreco();
}
?>
