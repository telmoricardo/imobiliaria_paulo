<?php
$imovelController = new ImovelController();
$categoriaController = new CategoriaController();
$helper = new Helper();
?>
<!-- -------------------------SLIDER DO SITE---------------------------- -->
<section class="slider">
    <h1 class="font-zero">Últimas do site:</h1>
    <article class="slider_item first">        
        <a href="cadastre-se" title="Cadastre-se" class="link_slyde">                         
            <img src="tim.php?src=upload/banner01.jpg&w=1080&h=420&zc=0" alt="" />
            <div class="tagline_dois">
                <h2 class="titulo_slide">BRASÍLIA SHOPPING!</h2>
                <p class="titulo_slide_b">Tenha seu escritório no shopping que é referêcia em nossa região.</p>
            </div>
        </a>
        <div class="btn_slider">
            <a href="#" class="down"><i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>
    </article>

    <article class="slider_item">        
        <a href="cadastre-se" title="Cadastre-se" class="link_slyde">            
            <img src="tim.php?src=upload/banner01.jpg&w=1080&h=420&zc=0" alt="" />
            <div class="tagline_dois">
                <h2 class="titulo_slide">BRASÍLIA SHOPPING!</h2>
                <p class="titulo_slide_b">Tenha seu escritório no shopping que é referêcia em nossa região.</p>
            </div>
        </a>
        <div class="btn_slider">
            <a href="#" class="down"><i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>
    </article>
    <article class="slider_item">        
        <a href="cadastre-se" title="Cadastre-se" class="link_slyde">
            <img src="tim.php?src=upload/banner01.jpg&w=1080&h=420&zc=0" alt="" />
            <div class="tagline_dois">
                <h2 class="titulo_slide">BRASÍLIA SHOPPING!</h2>
                <p class="titulo_slide_b">Tenha seu escritório no shopping que é referêcia em nossa região.</p>
            </div>
        </a>
        <div class="btn_slider">
            <a href="#" class="down"><i class="fas fa-arrow-alt-circle-down"></i></a>
        </div>
    </article>
</section>


<!------------------------------------------------------ MAIN HOME --------------------------------------------------------->
<main class="main_home container">

    <!---------------------- IMOVEIS EM DESTAQUE ------------------------------>
    <section class="section_recentes">        
        <div class="content up">         
            <h1>IMÓVEIS EM DESTAQUE</h1>
            <?php
            $imovelDestaque = $imovelController->ListarImovelDestaque(0, 3);
            if ($imovelDestaque == null):
                echo 'No momento não existe imovel em destaque, volte mais tarde';
            else:
                foreach ($imovelDestaque as $imovel):
                    ?>
                    <article class="fig_recentes">
                        <a href="single/<?= $imovel->getUrl(); ?>"> 
                            <img src="tim.php?src=upload/<?= $imovel->getThumb(); ?>&w=720&h=500&zc=1" title="<?= $imovel->getTitulo(); ?>" alt="<?= $imovel->getTitulo(); ?>"/>
                            <figcaption>
                                <h2><?= $helper->limitarTexto($imovel->getTitulo(), 40); ?></h2>
                                <?php
                                if ($imovel->getQuartos() > 0):
                                    ?>
                                    <p><?= $imovel->getQuartos(); ?> QUARTOS</p>
                                    <?php
                                endif;
                                ?>

                                <?php
                                if ($imovel->getGaragem() > 0):
                                    ?>
                                    <p><?= $imovel->getGaragem(); ?> VAGAS</p>
                                    <?php
                                endif;
                                ?>                          
                            </figcaption>
                        </a>
                    </article>              
                    <?php
                endforeach;
            endif;
            ?>

        </div>
        <div class="clear"></div>	
    </section>

    <!-- --------------------DIFERENCIAIS ------------------------------>
    <section class="diferenciais">
        <h1 class="titulo_dif">O único site de Brásilia em nº de variedades.</h1>
        <article class="content">
            <h1><span class="line"></span> <strong> DIFERENCIAIS</strong> <span class="line_one"></span> </h1>
            <div class="box_diferenciais">
                <section class="info_diferenciais">
                    <span class="number">1</span>
                    <div class="txt_diferencial">
                        <div class="tagline">
                            <h1>Ampla gama de imóveis</h1>						
                            <p>Nós temos o imóvel ideal, exatamente onde você precisa!</p>
                        </div>
                    </div>						
                </section>
                <section class="info_diferenciais">
                    <span class="number">2</span>
                    <div class="txt_diferencial">
                        <h1>Agentes em cada região</h1>						
                        <p>Temos agentes para cada região de Brasília. 
                        </p>
                    </div>						
                </section>
                <section class="info_diferenciais">
                    <span class="number">3</span>
                    <div class="txt_diferencial">
                        <h1>O melhor preço para aluguel</h1>						
                        <p>Aluguéis com o melhor preço em uma empresa de tradição e confiança!</p>
                    </div>						
                </section>
            </div>
        </article>
        <div class="clear"></div>	
    </section>

    <!--------------------------------------- PRODUTOS RETORNADO POR CATEGORIAS --------------------------->   
</main>
<div class="container">
    <div class="content">
        <?php
            $listarCategorias = $categoriaController->ListarCategoria();
            if($listarTipos == null):
            else:
                //foreach é dos tipos
                foreach ($listarCategorias as $category):
                $codCategory = $category->getCod_categoria();
        ?>
        <section class="home_imoveis">  
            <h1><?= $category->getNome_categoria();?></h1>   
            <article>             
                <div class="wrapper">
                    <?php 
                        $listaImoveisCategory = $imovelController->listarImovelCategory($codCategory, 0, 6);
                        if($listaImoveisCategory == null):
                            echo 'Não existe imovel cadastrado nesse momento';
                        else:
                    ?>
                    <div class="jcarousel-wrapper">
                        <div class="jcarousel">
                            <ul>
                                <?php 
                                    foreach ($listaImoveisCategory as $imoveisCategory):
                                ?>
                                <li class="item">
                                    <a href="single/<?= $imoveisCategory->getUrl();?>">                                   
                                        <img src="tim.php?src=upload/<?= $imoveisCategory->getThumb();?>&w=720&h=500&zc=1" alt="Image 1">
                                        <h2><?= $imoveisCategory->getTitulo();?></h2>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <a href="#" class="jcarousel-control-prev">&lsaquo;</a>
                        <a href="#" class="jcarousel-control-next">&rsaquo;</a>
                        <p class="al-center">
                            <a href="./category/<?= $category->getUrl_categoria();?>" class="btn btn-gray"><i class="fas fa-plus"></i> Veja Mais</a>
                        </p>
                    </div>
                    <?php                         
                        endif;
                    ?>
                </div>
            </article>
                       
        </section>
        
        <?php
            endforeach;
           endif;
        ?><!--listando as categorias-->
    
    </div>
</div>

