<?php

class CidadeController {
    private $cidadeDAO;

    public function __construct() {
        $this->cidadeDAO = new CidadeDAO();
    }
    
   public function ListarCidade() {
       return $this->cidadeDAO->ListarCidade();
    }
}
