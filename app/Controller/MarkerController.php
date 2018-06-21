<?php

class MarkerController {
    private $markerDAO;

    public function __construct() {
        $this->markerDAO = new MarkerDAO();
    }
    
    public function Cadastrar(Marker $marker) {
        return $this->markerDAO->Cadastrar($marker);
    }
    
    public function ListarMarker() {
       return $this->markerDAO->ListarMarker();
        
    }
    
    public function ListarMarkerImovel() {
        return $this->markerDAO->ListarMarkerImovel();
    }
    
    public function retornaMarkerCod($cod) {
        return $this->markerDAO->retornaMarkerCod($cod);
    }
    
    //retorna as duas tabelas imoveis e markers atraves do atributo imovel da tabela markers
    public function retornaMarkerImovel($imovelCod) {
        if ($imovelCod > 0 ) {
            return $this->markerDAO->retornaMarkerImovel($imovelCod);
        } else {
            return null;
        }
    }
    
    public function Excluir($cod) {
        return $this->markerDAO->Excluir($cod);
    }
    
    public function VerificarArquivoExiste($imovelCod, $markerId) {
        if ($imovelCod > 0 && $markerId > 0) {
            return $this->markerDAO->VerificarArquivoExiste($imovelCod, $markerId);
        } else {
            return null;
        }
    }
    
    public function RemoverMarker($imovelCod, $markerId) {
        if ($imovelCod > 0 && $markerId > 0) {
            return $this->markerDAO->RemoverMarker($imovelCod, $markerId);
        } else {
            return false;
        }
    }
    
}
