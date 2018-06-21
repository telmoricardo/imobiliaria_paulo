<?php

/**
 * Seo [ MODEL ]
 * Classe de apoio para o modelo LINK. Pode ser utilizada para gerar SEO para as páginas do sistema!

 */
class Seo {

    private $File;
    private $Link;
    private $Data;
    private $Tags;

    /* DADOS POVOADOS */
    private $seoTags;
    private $seoData;

    function __construct($File, $Link) {
        $this->File = strip_tags(trim($File));
        $this->Link = strip_tags(trim($Link));
    }

    /**
     * <b>Obter MetaTags:</b> Execute este método informando os valores de navegação para que o mesmo obtenha
     * todas as metas como title, description, og, itemgroup, etc.
     * 
     * <b>Deve ser usada com um ECHO dentro da tag HEAD!</b>
     * @return HTML TAGS =  Retorna todas as tags HEAD
     */
    public function getTags() {
        $this->checkData();
        return $this->seoTags;
    }

    /**
     * <b>Obter Dados:</b> Este será automaticamente povoado com valores de uma tabela single para arquivos
     * como categoria, artigo, etc. Basta usar um extract para obter as variáveis da tabela!
     * 
     * @return ARRAY = Dados da tabela
     */
    public function getData() {
        $this->checkData();
        return $this->seoData;
    }

    /*
     * ***************************************
     * **********  PRIVATE METHODS  **********
     * ***************************************
     */

    //Verifica o resultset povoando os atributos
    private function checkData() {
        if (!$this->seoData):
            $this->getSeo();
        endif;
    }

    //Identifica o arquivo e monta o SEO de acordo
    private function getSeo() {

        switch ($this->File):
            //SEO:: POST
            case 'single':
                $imovelController = new ImovelController();
                $ReadSeo = $imovelController->retornaImovelUrl($this->Link);                

                if ($ReadSeo == NULL):
                    $this->getData = null;
                    $this->seoTags = null;
                else:
                    $titulo = $ReadSeo->getTitulo();
                    $descricao = $ReadSeo->getDescricao();
                    $url = $ReadSeo->getUrl();
                    $thumb = $ReadSeo->getThumb();
                    $this->Data = [$titulo . ' - ' . SITENAME, $descricao, HOME . "/single/{$url}", HOME . "/uploads/{$thumb}"];
                endif;
                break;

            //SEO:: index
            case 'index':
                $this->Data = [SITENAME . ' - O melhor e mais completo site de imóveis, encontre seu imóvel para alugar. ', SITEDESC, HOME, INCLUDE_PATH . '/images/site.png'];
                break;

            //SEO:: quem somos
            case 'quem-somos':
                $this->Data = [SITENAME . ' - Temos uma ampla e diversificada carteira de imóveis para alugar. São apartamentos de 1, 2, 3 e 4 quartos, kit studios, salas, lojas e garagens no Plano Piloto e nas cidades-satélites..', SITEDESC, HOME, INCLUDE_PATH . '/images/site.png'];
                break;

            //SEO:: imoveis
            case 'imoveis':
                $this->Data = [SITENAME . ' - o melhor e mais completo site de imóveis, encontre seu imóvel para alugar.', SITEDESC, HOME, INCLUDE_PATH . '/images/site.png'];
                break;
            
            //SEO:: blog
            case 'blog':
                $this->Data = [SITENAME . ' - Novidades, notíciais dos imóveis do Paulo Octavio.', SITEDESC, HOME, INCLUDE_PATH . '/images/site.png'];
                break;

            //SEO:: 404
            default :
                $this->Data = [SITENAME . ' - 404 Oppsss, Nada encontrado!', SITEDESC, HOME . '/404', INCLUDE_PATH . '/images/site.png'];

        endswitch;

        if ($this->Data):
            $this->setTags();
        endif;
    }

    //Monta e limpa as tags para alimentar as tags
    private function setTags() {
        $this->Tags['Title'] = $this->Data[0];
        $this->Tags['Content'] = Check::Words(html_entity_decode($this->Data[1]), 25);
        $this->Tags['Link'] = $this->Data[2];
        $this->Tags['Image'] = $this->Data[3];

        $this->Tags = array_map('strip_tags', $this->Tags);
        $this->Tags = array_map('trim', $this->Tags);

        $this->Data = null;

        //NORMAL PAGE
        $this->seoTags = '<title>' . $this->Tags['Title'] . '</title> ' . "\n";
        $this->seoTags .= '<meta name="description" content="' . $this->Tags['Content'] . '"/>' . "\n";
        $this->seoTags .= '<meta name="robots" content="index, follow" />' . "\n";
        $this->seoTags .= '<link rel="canonical" href="' . $this->Tags['Link'] . '">' . "\n";
        $this->seoTags .= "\n";

        //FACEBOOK
        $this->seoTags .= '<meta property="og:site_name" content="' . SITENAME . '" />' . "\n";
        $this->seoTags .= '<meta property="og:locale" content="pt_BR" />' . "\n";
        $this->seoTags .= '<meta property="og:title" content="' . $this->Tags['Title'] . '" />' . "\n";
        $this->seoTags .= '<meta property="og:description" content="' . $this->Tags['Content'] . '" />' . "\n";
        $this->seoTags .= '<meta property="og:image" content="' . $this->Tags['Image'] . '" />' . "\n";
        $this->seoTags .= '<meta property="og:url" content="' . $this->Tags['Link'] . '" />' . "\n";
        $this->seoTags .= '<meta property="og:type" content="article" />' . "\n";
        $this->seoTags .= "\n";

        //ITEM GROUP (TWITTER)
        $this->seoTags .= '<meta itemprop="name" content="' . $this->Tags['Title'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="description" content="' . $this->Tags['Content'] . '">' . "\n";
        $this->seoTags .= '<meta itemprop="url" content="' . $this->Tags['Link'] . '">' . "\n";

        $this->Tags = null;
    }

}
