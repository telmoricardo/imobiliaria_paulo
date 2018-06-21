<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Agente.php';
require_once 'Categoria.php';

class Imovel {
    private $cod;
    private $titulo;
    private $url;
    private $valor;
    private $condominio;
    private $descricao;
    private $endereco;
    private $cidade;
    private $estado;
    private $categoria;
    private $quartos;
    private $suite;
    private $banheiro;
    private $andar;
    private $garagem;
    private $cep;
    private $thumb;
    private $destaque;
    private $area;
    private $mapa;
    private $agente;
    private $status;
    
    public function __construct() {
        $this->agente = new Agente();
        $this->categoria = new Categoria();
    }
    
    function getCod() {
        return $this->cod;
    }

    function getTitulo() {
        return $this->titulo;
    }

    function getUrl() {
        return $this->url;
    }

    function getValor() {
        return $this->valor;
    }

    function getCondominio() {
        return $this->condominio;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
    }

    function getEstado() {
        return $this->estado;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getQuartos() {
        return $this->quartos;
    }

    function getSuite() {
        return $this->suite;
    }

    function getBanheiro() {
        return $this->banheiro;
    }

    function getAndar() {
        return $this->andar;
    }

    function getGaragem() {
        return $this->garagem;
    }

    function getCep() {
        return $this->cep;
    }

    function getThumb() {
        return $this->thumb;
    }

    function getDestaque() {
        return $this->destaque;
    }

    function getArea() {
        return $this->area;
    }

    function getMapa() {
        return $this->mapa;
    }

    function getAgente() {
        return $this->agente;
    }

    function getStatus() {
        return $this->status;
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

    function setValor($valor) {
        $this->valor = $valor;
    }

    function setCondominio($condominio) {
        $this->condominio = $condominio;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }

    function setQuartos($quartos) {
        $this->quartos = $quartos;
    }

    function setSuite($suite) {
        $this->suite = $suite;
    }

    function setBanheiro($banheiro) {
        $this->banheiro = $banheiro;
    }

    function setAndar($andar) {
        $this->andar = $andar;
    }

    function setGaragem($garagem) {
        $this->garagem = $garagem;
    }

    function setCep($cep) {
        $this->cep = $cep;
    }

    function setThumb($thumb) {
        $this->thumb = $thumb;
    }

    function setDestaque($destaque) {
        $this->destaque = $destaque;
    }

    function setArea($area) {
        $this->area = $area;
    }

    function setMapa($mapa) {
        $this->mapa = $mapa;
    }

    function setAgente($agente) {
        $this->agente = $agente;
    }

    function setStatus($status) {
        $this->status = $status;
    }


    
    
}
