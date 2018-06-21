<div class="container">
    <div class="content">
        <h1 class="font-zero">Conheça o nosso imóvel.</h1>
        <article class="artigo_destaque">				
            <h1 class="titulo_aluguel">ALUGUEL</h1>		
            <div class="box_aluguel">
                <div class="box_btn_aluguel">
                    <a href="#" class="btn btn_aluguel">MENOR PREÇO</a>
                    <span> | </span>
                    <a href="#" class="btn btn_aluguel">MAIOR PREÇO</a>
                </div>
            </div>
        </article>
    </div>
    <div class="clear"></div>
</div>

<section class="container">
    <div class="content destaque">
        <h1 style="margin-bottom: 15px;">ADICIONADOS RECENTEMENTE</h1>            		
        
        <div class="artigo_destaque">
            <div class="box_thumb_destaques" id="box_thumb_destaques">                  
            </div>

            <div class="btn-carregar">
                <a href="#box_thumb_destaques" class="btn btn-red btn-carregar-mais j_read">Carregar Mais</a>
            </div>

            <div class="lendoArtigos">
                <img class="load" src="<?= REQUIRE_PATH ?>/img/load.gif">
                <p>Aguarde, carregando imóveis</p>
            </div>
        </div> 
        
    </div>
    <div class="clear"></div>
</section>  



<!-- ------------------------------------- MAIS ACESSADOS --------------------------->
<section class="container acessados">    
    <div class="content">
        <h1>MAIS ACESSADOS</h1>

        <?php for ($i = 0; $i < 3; $i++): ?>
            <article class="artigos_acessados">
                <a href="#">
                    <img src="<?= REQUIRE_PATH ?>/img/thumb01.jpg">
                    <h2>RESIDENCIA CARLOS CHAGAS</h2>
                </a>
            </article>
        <?php endfor; ?>
    </div>
    <div class="clear"></div>
</section>