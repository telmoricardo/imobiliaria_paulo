<?php
$imovelController = new ImovelController();
$helper = new Helper();

$categoria = filter_input(INPUT_POST,"slTipo", FILTER_SANITIZE_NUMBER_INT);
$cidade = filter_input(INPUT_POST,"slLocal", FILTER_SANITIZE_NUMBER_INT);
$quarto = filter_input(INPUT_POST,"slQuarto", FILTER_SANITIZE_NUMBER_INT);
$vagas = filter_input(INPUT_POST,"slVaga", FILTER_SANITIZE_NUMBER_INT);

$sql = '';
if ($categoria) {
    $sql .= "AND categoria = '" . $categoria . "' ";
} else {
    
}
if ($cidade) {
    $sql .= "AND cidade = '" . $cidade . "' ";
} else {
    
}
if ($quarto) {
    $sql .= "AND quartos = '" . $quarto . "' ";
} else {
    
}
if ($vagas) {
    $sql .= "AND garagem = '" . $vagas . "' ";
} else {
    
}


$listaImovelSearch = $imovelController->RetornarFiltro($sql);
?>
<main class="main_home container">
    <!--------------------------------------- DESTAQUES --------------------------->
    <section>		
        <div class="content destaque">
            <?php
            if ($listaImovelSearch == null):
                echo '<h1>Nenhum imovel encontrado</h1>';
            else:
                ?>
                <article class="artigo_destaque">				
                    <h1>RETORNO DE IMÓVEIS PESQUISADOS</h1>				
                    <div class="box_thumb_destaques">
                        <?php
                        foreach ($listaImovelSearch as $imovel):
                            ?>
                            <a href="single/<?= $imovel->getUrl(); ?>">

                                <figure class="thumb_destaques">
                                    <img src="tim.php?src=upload/<?= $imovel->getThumb(); ?>&w=300&h=250">
                                    <figcaption>
                                        <h1><?= $helper->limitarTexto($imovel->getTitulo(), 40); ?></h1>
                                    </figcaption>
                                </figure>

                            </a>
                            <?php
                        endforeach;
                        ?>
                    </div>
                </article>
                <?php
                endif;
                ?>
        </div>				
    </section>

    <div class="content">
        <div class="clear"></div>	
    </div>		
</main>
