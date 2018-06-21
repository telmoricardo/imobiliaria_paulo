<?php
class CategoriaController {
    private $categoriaDAO;

    public function __construct() {
        $this->categoriaDAO = new CategoriaDAO();
    }
    
    /********************** SITE ********************************/
    public function ListarCategoria() {
        return $this->categoriaDAO->ListarCategoria();
    }
    public function retornarCategoria($url){
        return $this->categoriaDAO->retornarCategoria($url);
    }
    
}
