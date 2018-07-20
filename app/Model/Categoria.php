<?php
/**
 * Classe agente possui os atributos cod, nome, celular, telefone, email, região.
 *
 */
class Categoria {   
    private $cod_categoria;
    private $nome_categoria;
    private $url_categoria;
    private $status_categoria;
   
    function getCod_categoria() {
        return $this->cod_categoria;
    }

    function getNome_categoria() {
        return $this->nome_categoria;
    }

    function getUrl_categoria() {
        return $this->url_categoria;
    }

    function getStatus_categoria() {
        return $this->status_categoria;
    }

    function setCod_categoria($cod_categoria) {
        $this->cod_categoria = $cod_categoria;
    }

    function setNome_categoria($nome_categoria) {
        $this->nome_categoria = $nome_categoria;
    }

    function setUrl_categoria($url_categoria) {
        $this->url_categoria = $url_categoria;
    }

    function setStatus_categoria($status_categoria) {
        $this->status_categoria = $status_categoria;
    }
    
}
