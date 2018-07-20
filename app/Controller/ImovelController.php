<?php

class ImovelController {

    private $imovelDAO;

    public function __construct() {
        $this->imovelDAO = new ImovelDAO();
    }

    /*     * ********************************PAINEL ADMIN***************************************************** */

    //cadastrar
    public function Cadastrar(Imovel $imovel) {
        if ($imovel->getThumb() != "" && $imovel->getTitulo() != "" && strlen($imovel->getTitulo()) > 2 && $imovel->getStatus() >= 1 && $imovel->getStatus() <= 2 && $imovel->getCategoria() != ""):
            return $this->imovelDAO->Cadastrar($imovel);
        else:
            return false;
        endif;
    }
    //atualizar
    public function Atualizar(Imovel $imovel) {
        if ($imovel->getTitulo() != "" && strlen($imovel->getTitulo()) > 2 && $imovel->getStatus() >= 1 && $imovel->getStatus() <= 2 && $imovel->getCategoria() != ""):
            return $this->imovelDAO->Atualizar($imovel);
        else:
            return false;
        endif;
    }
    //listando os imoveis
    public function ListarImovelLimite($inicio = null, $quantidade = null) {
        return $this->imovelDAO->ListarImovelLimite($inicio, $quantidade);
    }
    //retorna dados pelo cod
    public function retornaImovelCod($cod) {
        if ($cod > 0):
            return $this->imovelDAO->retornaImovelCod($cod);
        else:
            return false;
        endif;
    }
    //excluir
    public function Excluir($cod) {
        return $this->imovelDAO->Excluir($cod);
    }
    //RETORNA IMAGEM NA PAGINA DE ATUALIZAÇÃO DOS POSTS
    public function RetornaPostImg($cod) {
         if ($cod > 0):
            return $this->imovelDAO->RetornaPostImg($cod);
        else:
            return false;
        endif;
    }
    //ALTERAR IMAGEM NA PAGINA DE ATUALIZAÇÃO DOS POSTS
    public function AlterarImagem($cod, $thumb) {
        return $this->imovelDAO->AlterarImagem($cod, $thumb);
    }     

    public function retornaStatusImov($cod) {
        return $this->imovelDAO->retornaStatusImov($cod);
    }

    public function AlterarStatus($cod, $status) {
        return $this->imovelDAO->AlterarStatus($cod, $status);
    }
    
    public function RetornaQtdImovel() {
        return $this->imovelDAO->RetornaQtdImovel();
    }




    /*     * ********************************PAINEL ADMIN***************************************************** */
    
    /*     * ******************************** SITE ***************************************************** */
    public function ListarImovel() {
        return $this->imovelDAO->ListarImovel();
    }
    
    //listagem imovel em destaque
    public function ListarImovelDestaque($inicio = null, $quantidade = null) {
        return $this->imovelDAO->ListarImovelDestaque($inicio, $quantidade);
    }

    public function ListarImovelNaoDestk() {
        return $this->imovelDAO->ListarImovelNaoDestk();
    }
    
    // pagina single /
    public function retornaImovelUrl($url) {
        return $this->imovelDAO->retornaImovelUrl($url);
    }

    

    //filtro avançado com select
    public function retornaImovelCidade($estado) {
        return $this->imovelDAO->retornaImovelCidade($estado);
    }

    //filtro avançado com select
    public function retornaImovelTipo($cidade) {
        return $this->imovelDAO->retornaImovelTipo($cidade);
    }

    //filtro avançado com select
    public function retornaImovelQuarto($tipo) {
        return $this->imovelDAO->retornaImovelQuarto($tipo);
    }

    //listando imóveis por interesse
    public function listarImovelTipo($tipo) {
        return $this->imovelDAO->listarImovelTipo($tipo);
    }

    public function listarTipo() {
        return $this->imovelDAO->listarTipo();
    }

    public function listarCidade() {
        return $this->imovelDAO->listarCidade();
    }

    

    public function seoImovelUrl($url) {
        return $this->imovelDAO->seoImovelUrl($url);
    }

    public function BuscarImovel($termo) {
        return $this->imovelDAO->BuscarImovel($termo);
    }

    public function verificarImovel($url) {
        if (!empty($url)):
            return $this->imovelDAO->verificarImovel($url);
        else:
            return false;
        endif;
    }

    /*     * *******************************SITE ********************************************************* */
    /* index pesquisa */

    public function RetornarFiltro($sql) {
        return $this->imovelDAO->RetornarFiltro($sql);
    }

    /* categoria com slider pagina index */

    public function listarImovelCategory($categoria, $inicio = null, $quantidade = null) {
        return $this->imovelDAO->listarImovelCategory($categoria, $inicio, $quantidade);
    }

    

    //*QUANTIDADES DE VISUALIZAÇÃO*/
    public function AlterarViews($url) {
        return $this->imovelDAO->AlterarViews($url);
    }

    /* Listando os imoveis mais vistos */

    public function listarViews($inicio = null, $quantidade = null) {
        return $this->imovelDAO->listarViews($inicio, $quantidade);
    }

}
