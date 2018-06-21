<?php

class ArtigoController {

    private $artigoDAO;

    public function __construct() {
        $this->artigoDAO = new ArtigoDAO();
    }
    
    public function Cadastrar(Artigo $artigo){
        return $this->artigoDAO->Cadastrar($artigo);
   }
   
   public function listarArtigoImoveis($inicio = null, $quantidade = null) {
        return $this->artigoDAO->listarArtigoImoveis($inicio, $quantidade);
    }
    
        
     public function retornarArtigoUrl($url) {
        return $this->artigoDAO->retornarArtigoUrl($url);
    }
   
}
