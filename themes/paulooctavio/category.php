<?php
/**
 * estou utilizando o get do arquivo .htaccess que pego a url amigavel, se $url for igual $url recebe um novo parametro senão recebe pagina index
 * estou separando a url com / exemplo: site.com.br/single/aquipegoaurl
 * $url[1] = single / $url[2]=aquipegoaurl
 */
//verificando a url e esta voltando url[0] = single, url[1] = exemplo-do-post
$url = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$url = ($url ? $url : 'index');
$url = explode('/', $url);
$urlCod = $url[1];

$categoriaController = new CategoriaController();
$imovelController = new ImovelController();
$helper = new Helper();

$retornarCategoria = $categoriaController->retornarCategoria($urlCod);

if ($retornarCategoria == null):
    ?>
    <div class="container">
        <div class="content">
            <section class="section_imoveis">
                <h1>Não existem imóveis cadastrados nesse momento!</h1>            
            </section>
        </div>
    </div>
    <?php
else:
    $codigoCat = $retornarCategoria->getCod_categoria();
    $tituloCat = $retornarCategoria->getNome_categoria();
    $listarImoveis = $imovelController->listarImovelCategory($codigoCat, 0, 100);
    $_SESSION['cod_category'] = $codigoCat;
    ?>
    <!----------------------------------SLIDE HOME ----------------------------------->
    <div class="container">
        <div class="content">
            <section class="section_imoveis">
                <h1><?= $tituloCat ?></h1>                
                <div id="box_imoveis_category">           
                    
                    <?php 
                    
                    foreach ($listarImoveis as $imovel): ?>                    
                        <article class="imoveis_itens">
                            <a href="../single/<?= $imovel->getUrl(); ?>">
                            <img src="../tim.php?src=upload/<?= $imovel->getThumb(); ?>&w=720&h=500&zc=1" title="<?= $imovel->getTitulo(); ?>" alt="<?= $imovel->getTitulo(); ?>"/>                
                            <h2><?= $helper->limitarTexto($imovel->getTitulo(), 45); ?></h2>
                            </a>
                        </article>            
                    <?php endforeach; ?>
                </div>
                
            </section>
            
            
        </div>
    </div>
<?php
endif;
?>
