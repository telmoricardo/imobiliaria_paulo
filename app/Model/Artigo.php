<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


class Artigo {
    private $cod;
    private $titulo;
    private $url;
    private $destaque;
    private $status;
    private $data;
    private $descricao;          
    private $thumb;        
    
    function getTitulo() {
        return $this->titulo;
    }
    
    function getCod() {
        return $this->cod;
    }

    function getUrl() {
        return $this->url;
    }

    function getDestaque() {
        return $this->destaque;
    }

    function getStatus() {
        return $this->status;
    }

    function getData() {
        return $this->data;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getThumb() {
        return $this->thumb;
    }

    function setCod($cod) {
        $this->cod = $cod;
    }
    
    function setTitulo($titulo) {
        $this->titulo = $titulo;
    }
    
    function setUrl($url) {
        $this->url = $url;
    }

    function setDestaque($destaque) {
        $this->destaque = $destaque;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setData($data) {
        $this->data = $data;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }


}
