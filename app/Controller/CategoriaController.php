<?php

class CategoriaController {

    private $categoriaDAO;

    public function __construct() {
        $this->categoriaDAO = new CategoriaDAO();
    }

    /* PAINEL */
    //cadastrar
    public function Cadastrar(Categoria $categoria) {
        if (strlen($categoria->getNome_categoria()) > 2 && $categoria->getStatus_categoria() >= 1 && $categoria->getStatus_categoria() <= 2) :
            return $this->categoriaDAO->Cadastrar($categoria);
        else :
            return false;
        endif;
    }
    //atualizar
    public function Atualizar(Categoria $categoria) {
        if (strlen($categoria->getNome_categoria()) > 2 && $categoria->getStatus_categoria() >= 1 && $categoria->getStatus_categoria() <= 2) :
            return $this->categoriaDAO->Atualizar($categoria);
        else :
            return false;
        endif;
    }
    //excluir
    public function Excluir($cod) {
        if ($cod > 0):
            return $this->categoriaDAO->Excluir($cod);
        else:
            return null;
        endif;
    }

    /* Listar com limites */
    public function ListarCatLimit($inicio, $quantidade) {
        return $this->categoriaDAO->ListarCatLimit($inicio, $quantidade);
    }

    /* retorna a quantidades de categorias */
    public function RetornaQtdCategoria() {
        return $this->categoriaDAO->RetornaQtdCategoria();
    }

    /* retorna o status da categoria */
    public function retornaStatusCat($cod) {
        if ($cod > 0):
            return $this->categoriaDAO->retornaStatusCat($cod);
        else:
            return null;
        endif;
    }

    /* alterar o status da categoria */
    public function AlterarStatus($cod, $status) {
        return $this->categoriaDAO->AlterarStatus($cod, $status);
    }

    /* PAINEL */


    /* SITE */

    public function ListarCategoria() {
        return $this->categoriaDAO->ListarCategoria();
    }

    public function retornarCategoria($url) {
        return $this->categoriaDAO->retornarCategoria($url);
    }

    //retorna categoria pelo cod
    public function retornoCodCategoria($cod) {
        if ($cod > 0):
            return $this->categoriaDAO->retornoCodCategoria($cod);
        else:
            return null;
        endif;
    }

}
