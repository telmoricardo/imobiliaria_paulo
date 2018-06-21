<?php

class propertyController {
    private $propertyDAO;
    
    public function __construct() {
        $this->propertyDAO = new propertyDAO();
    }
    
    public function RetornarProperty($termo, $tipo) {
        return $this->propertyDAO->RetornarProperty($termo, $tipo);
        
    }
}
