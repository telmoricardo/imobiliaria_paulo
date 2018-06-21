<?php
class EstadoController {
    private $estadoDAO;

    public function __construct() {
        $this->estadoDAO = new EstadoDAO();
    }
    
    public function ListarEstado() {
        return $this->estadoDAO->ListarEstado();
    }   
    
}
