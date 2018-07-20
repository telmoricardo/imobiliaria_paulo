<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once 'Agente.php';
require_once 'Categoria.php';
require_once 'Cidade.php';

class Imovel {
    private $cod;
    private $titulo;
    private $url;
    private $valor;
    private $condominio;
    private $iptu;
    private $seguro;
    private $descricao;
    private $obs_condiminio;
    private $obs_alugar;    
    private $endereco;
    private $cidade;    
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
    private $street;
    private $agente;
    private $status;
    private $view;
    private $pet;
    private $parada;
    
    public function __construct() {
        $this->agente = new Agente();
        $this->categoria = new Categoria();
        $this->cidade = new Cidade();
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

    function getIptu() {
        return $this->iptu;
    }

    function getSeguro() {
        return $this->seguro;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function getObs_condiminio() {
        return $this->obs_condiminio;
    }

    function getObs_alugar() {
        return $this->obs_alugar;
    }

    function getEndereco() {
        return $this->endereco;
    }

    function getCidade() {
        return $this->cidade;
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

    function getStreet() {
        return $this->street;
    }

    function getAgente() {
        return $this->agente;
    }

    function getStatus() {
        return $this->status;
    }

    function getView() {
        return $this->view;
    }

    function getPet() {
        return $this->pet;
    }

    function getParada() {
        return $this->parada;
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

    function setIptu($iptu) {
        $this->iptu = $iptu;
    }

    function setSeguro($seguro) {
        $this->seguro = $seguro;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function setObs_condiminio($obs_condiminio) {
        $this->obs_condiminio = $obs_condiminio;
    }

    function setObs_alugar($obs_alugar) {
        $this->obs_alugar = $obs_alugar;
    }

    function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    function setCidade($cidade) {
        $this->cidade = $cidade;
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

    function setStreet($street) {
        $this->street = $street;
    }

    function setAgente($agente) {
        $this->agente = $agente;
    }

    function setStatus($status) {
        $this->status = $status;
    }

    function setView($view) {
        $this->view = $view;
    }

    function setPet($pet) {
        $this->pet = $pet;
    }

    function setParada($parada) {
        $this->parada = $parada;
    }


}
