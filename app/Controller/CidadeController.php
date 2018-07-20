<?php

class CidadeController {

    private $cidadeDAO;

    public function __construct() {
        $this->cidadeDAO = new CidadeDAO();
    }

    public function Cadastrar(Cidade $cidade) {
        if ($cidade->getNome_cidade() != "" && strlen($cidade->getNome_cidade()) > 2 && $cidade->getStatus_cidade() >= 1 && $cidade->getStatus_cidade() <= 2) :
            return $this->cidadeDAO->Cadastrar($cidade);
        else :
            return false;
        endif;
    }
    public function ListarCidadeLimite($inicio, $quantidade) {
        return $this->cidadeDAO->ListarCidadeLimite($inicio, $quantidade);
    }
     /* retorna a quantidades de categorias */
    public function RetornaQtdCategoria() {
        return $this->cidadeDAO->RetornaQtdCategoria();
    }
    /* retorna o status da categoria */
    public function retornaStatus($cod) {
        if ($cod > 0):
            return $this->cidadeDAO->retornaStatus($cod);
        else:
            return null;
        endif;
    }
    /* alterar o status da categoria */
    public function AlterarStatus($cod, $status) {
        return $this->cidadeDAO->AlterarStatus($cod, $status);
    }

    public function ListarCidade() {
        return $this->cidadeDAO->ListarCidade();
    }

}
