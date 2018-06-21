<?php
/**
 * Classe agente possui os atributos cod, nome, celular, telefone, email, região.
 * @author Telmo Ricardo
 */


class Categoria {
   
    private $cod_categoria;
    private $nome_categoria;
    private $url_categoria;
    
    function getCod_categoria() {
        return $this->cod_categoria;
    }

    function getNome_categoria() {
        return $this->nome_categoria;
    }

    function getUrl_categoria() {
        return $this->url_categoria;
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


    
    
}
