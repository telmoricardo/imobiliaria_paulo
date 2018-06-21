<?php

require_once("Imovel.php");

class Imagem {

    private $cod;
    private $imagem;
    private $imovel;

    public function __construct() {
        $this->imovel = new Imovel();
    }

    function getCod() {
        return $this->cod;
    }

    function getImagem() {
        return $this->imagem;
    }

    function getImovel() {
        return $this->imovel;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }

    function setImovel($imovel) {
        $this->imovel = $imovel;
    }





}

?>