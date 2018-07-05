<?php
$imovelController = new ImovelController();
$listaImoveis = $imovelController->listarViews(0, 3);
$helper = new Helper();
?>
<section class="container">
    <div class="content">
        <header class="sectiontitle sectiontitle-nomargin">
            <h1>Desculpe, não encontrado o conteúdo relacionado.</h1>
            <p class="tagline">
                Você está vendo agora a página 404 pois não encontramos conteúdo relacionado à <strong>página solicitada</strong>, mas não saia ainda. Temos algumas dicas para te ajudar com sua pesquisa!
            </p>
        </header>
        <div class="clear"></div>
    </div>

    <article class="bg-light">
        <div class="content">
            <header class="articletitle">
                <h1>Deixe uma sugestão de conteúdo:</h1>
                <p class="tagline">Informe seu nome e e-mail para sugerir conteúdo relacionado à <?= $setUrl; ?></p>
            </header>

            <form name="sendcontent" action="" method="post">
                <div class="column column-4">
                    <input type="text" title="Informe Seu Nome" name="nome" placeholder="Informe Seu Nome:"/>
                </div>
                <div class="column column-4">
                    <input type="email" title="Informe Seu E-mail" name="email" placeholder="Informe Seu E-mail:"/>
                </div>
                <div class="column column-4">
                    <input type="submit" class="btn btn-blue" style="height: 48px;" value="Deixe sua Sugestão">
                </div>               
            </form>
            <div class="clear"></div>
        </div>
    </article>

    <section>        
        <div class="content">
            <header class="articletitle">
                <h1>Veja imóvel que possa ser do seu interesse:</h1>
                <p class="tagline">Veja o que encontramos ao pesquisa por <b><?= $setUrl; ?></b> em nossa base de conteúdo!</p>
            </header>
            <?php
            foreach($listaImoveis as $views):                
            ?>
            <article class="related_item box box-small">
                <img title="<?= $views->getTitulo();?>" alt="<?= $views->getTitulo();?>" src="<?= HOME; ?>/upload/<?= $views->getThumb(); ?>"/>
                <h1 class="box_video_title"><a href="<?= HOME;?>/single/<?= $views->getUrl(); ?>" title="<?= $views->getTitulo();?>"><?= $helper->limitarTexto($views->getTitulo(), 30);?></a></h1>
                
            </article>
            <?php
                endforeach;
            ?>
            
            <div class="clear"></div>
        </div>     
    </section>
    
</section>