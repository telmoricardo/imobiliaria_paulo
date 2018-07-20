<?php

class AgenteController {

    private $agenteDAO;

    public function __construct() {
        $this->agenteDAO = new AgenteDAO();
    }
    
    public function Cadastrar(Agente $agente) {
        return $this->agenteDAO->Cadastrar($agente);
    }
    
    public function ListarAgente() {
        return $this->agenteDAO->ListarAgente();
    }
    
    public function listaCorretorR($regiao) {
        return $this->agenteDAO->listaCorretorR($regiao);
    }
    
    
}
