<?php

require_once("Estado.php");

class Cidade {
    
        
    private $cod;
    private $nome;
    private $estado;
    
    public function __construct() {
        $this->estado = new Estado();
    }
    
    function getCod() {
        return $this->cod;
    }

    function getNome() {
        return $this->nome;
    }

    function getEstado() {
        return $this->estado;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }




}
