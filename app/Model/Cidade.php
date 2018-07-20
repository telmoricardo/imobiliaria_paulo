<?php

class Cidade {   
    private $cod_cidade;
    private $nome_cidade;
    private $url_cidade;
    private $status_cidade;
    
    function getCod_cidade() {
        return $this->cod_cidade;
    }

    function getNome_cidade() {
        return $this->nome_cidade;
    }

    function getUrl_cidade() {
        return $this->url_cidade;
    }

    function getStatus_cidade() {
        return $this->status_cidade;
    }

    function setCod_cidade($cod_cidade) {
        $this->cod_cidade = $cod_cidade;
    }

    function setNome_cidade($nome_cidade) {
        $this->nome_cidade = $nome_cidade;
    }

    function setUrl_cidade($url_cidade) {
        $this->url_cidade = $url_cidade;
    }

    function setStatus_cidade($status_cidade) {
        $this->status_cidade = $status_cidade;
    }
}
