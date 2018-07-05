<?php require_once './app/config.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Paulo Octavio Imóveis - O melhor e mais completo site de imóveis, encontre seu imóvel para alugar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link href="<?= INCLUDE_PATH; ?>/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH; ?>/css/jcarousel.responsive.css" rel="stylesheet" type="text/css"/>
        <script src="<?= INCLUDE_PATH; ?>/js/bioep.js"></script>
        <script type="text/javascript">
            bioEp.init({
                html: '<div id="bio_ep_content">' +
                        '<img id="bio_img" src="<?= INCLUDE_PATH;?>/img/logo-po.png" alt="Paulo Octavio Aluguel"' +
                        '<span></span>' +
                        '<span>RECEBA OS IMÓVEIS CADASTRADOS NO SEU E-MAIL</span>' +
                        '<span></span>' +
                        '<a href="#" class="btn btn-red" style="margin-top: 18px;">CLIQUE AQUI</a>' +
                        '</div>',
                css: '#bio_ep {width: 400px; height: 300px; color: #fff; background-color: #fff; text-align: center; padding:25px;}' +                        
                        '#bio_ep_content {padding: 24px 0 0 0; font-family: "Titillium Web";}' +
                        '#bio_ep_content span:nth-child(1) {display: block; color: #333; font-size: 1em; font-weight: 600;}' +
                        '#bio_ep_content span:nth-child(2) {display: block; color: #333; font-size: 1.5em; font-weight: 600; margin-top: 15px; margin-botton: 15px;}' +
                        '#bio_ep_content span:nth-child(3) {display: block; font-size: 16px;}' +
                        '#bio_ep_content span:nth-child(4) {display: block; margin: -5px 0 0 0; font-size: 16px; font-weight: 600;}' +
                        '.bio_btn {display: inline-block; margin: 18px 0 0 0; padding: 7px; color: #fff; font-size: 14px; font-weight: 600; background-color: #70bb39; border: 1px solid #47ad0b; cursor: pointer; -webkit-appearance: none; -moz-appearance: none; border-radius: 0; text-decoration: none;}',
                fonts: ['//fonts.googleapis.com/css?family=Titillium+Web:300,400,600'],
                cookieExp: 0
            });
        </script>
    </head>
    <body>
        <!------------------------------- CABECALHO ---------------------------->
        <header class="main_cabecalho container">
            <div class="content">                
                <!----------------------------------- LOGO --------------------------------->
                <div class="box_header">
                    <a href="<?= HOME; ?>" class="main_logo">
                        <h1 class="font-zero">Paulo Octavio Aluguel</h1>
                        <div class="logo">
                            <img src="<?= INCLUDE_PATH; ?>/img/logo-po.png"  alt="Paulo Octavio Aluguel" title="Paulo Octavio Aluguel"/>                            
                        </div>
                    </a>      

                    <!----------------------------------- MENU --------------------------------->
                    <div class="main_nav">
                        <ul class="menu">                        
                            <li><a href="<?= HOME; ?>"> INICIAL</a></li>
                            <li><a href="<?= HOME; ?>/favoritos">MEUS FAVORITOS</a></li>
                            <li><a href="<?= HOME; ?>/quero-alugar"> QUERO ALUGAR</a></li>
                            <li><a href="http://www.paulooctavio.com.br/" target="_blank"> QUERO COMPRAR</a></li>
                            <li><a href="<?= HOME; ?>/blog">BLOG </a></li>
                            <li><a href="<?= HOME; ?>/contato">CONTATO</a></li>                        
                            <!--<li><a href="<?= HOME; ?>/cadastrar">CADASTRE-SE</a></li>-->                        
                            <!--<li><a href="<?= HOME; ?>/login">ACESSO <span class="fa fa-users"></span></a></li>-->                        
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </header>

        <!---------------------------------------FORMULARIO DE BUSCA------------------------------->
        <header class="pesquisa container">

            <div class="box_pesquisa content">             
                <form class="form_search_imovel" name="cadastro" method="post" action="<?= HOME; ?>/imovel">
                    <div class="column column-3">
                        <label>TIPO DE IMÓVEL?</label>

                        <?php
                        $categoriaController = new CategoriaController();
                        $listarTipos = $categoriaController->ListarCategoria();

                        if (isset($_POST['slTipo'])):
                            $_SESSION['tipo'] = filter_input(INPUT_POST, 'slTipo', FILTER_SANITIZE_NUMBER_INT);
                        endif;

                        $s = ' selected="selected" ';
                        $tipo = isset($_SESSION['tipo']) ? $_SESSION['tipo'] : '';
                        ?>
                        <select id="slTipo" name="slTipo" class="selecao" id="slTipo">
                            <option value="">Tipo de Imóvel</option> <i class="fa fa-caret-down"></i>
                            <?php
                            foreach ($listarTipos as $tipos):
                                ?>
                                <option <?php echo $tipo == $tipos->getCod_categoria() ? $s : ''; ?>value="<?= $tipos->getCod_categoria(); ?>"><?= $tipos->getNome_categoria(); ?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>  
                    </div>

                    <div class="column column-2">
                        <label>LOCAL ?</label>
                        <?php
                        $cidadeController = new CidadeController();
                        $listarCidades = $cidadeController->ListarCidade();

                        if (isset($_POST['slLocal'])):
                            $_SESSION['local'] = filter_input(INPUT_POST, 'slLocal', FILTER_SANITIZE_STRING);
                        endif;

                        $s = ' selected="selected" ';
                        $local = isset($_SESSION['local']) ? $_SESSION['local'] : '';
                        ?>
                        <select id="slLocal" name="slLocal">
                            <option value="">Selecione o Local</option> <i class="fa fa-caret-down"></i>
                            <?php
                            foreach ($listarCidades as $cidade):
                                ?>
                                <option <?php echo $local == $cidade->getCod() ? $s : ''; ?>value="<?= $cidade->getCod(); ?>"><?= $cidade->getNome(); ?></option>
                                <?php
                            endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="column column-2">
                        <label>QUARTOS?</label>
                        <?php
                        if (isset($_POST['slQuarto'])):
                            $_SESSION['quarto'] = filter_input(INPUT_POST, 'slQuarto', FILTER_SANITIZE_STRING);
                        endif;

                        $s = ' selected="selected" ';
                        $quarto = isset($_SESSION['quarto']) ? $_SESSION['quarto'] : '';
                        ?>
                        <select id="slQuarto" name="slQuarto" id="slQuarto">
                            <option value="">Quartos...</option>   
                            <option <?php echo $quarto == '1' ? $s : ''; ?>value="1">1 Quarto</option>
                            <option <?php echo $quarto == '2' ? $s : ''; ?>value="2">2 Quartos</option>
                            <option <?php echo $quarto == '3' ? $s : ''; ?>value="3">3 Quartos</option>
                            <option <?php echo $quarto == '4' ? $s : ''; ?>value="4">4 Quartos</option>
                        </select>
                    </div>
                    <div class="column column-2">
                        <label>VAGAS?</label>                        

                        <?php
                        if (isset($_POST['slVaga'])):
                            $_SESSION['vagas'] = filter_input(INPUT_POST, 'slVaga', FILTER_SANITIZE_STRING);
                        endif;

                        $s = ' selected="selected" ';
                        $vagas = isset($_SESSION['vagas']) ? $_SESSION['vagas'] : '';
                        ?>
                        <select id="slVaga" name="slVaga">
                            <option value="">Vagas...</option>   
                            <option <?php echo $vagas == '1' ? $s : ''; ?>value="1">1 Vaga</option>
                            <option <?php echo $vagas == '2' ? $s : ''; ?>value="2">2 Vagas</option>
                            <option <?php echo $vagas == '3' ? $s : ''; ?>value="3">3 Vagas</option>

                        </select>
                    </div>
                    <div class="column column-2">                           
                        <input type="submit" class="btn_search_imovel" name="submit" value="BUSCAR">
                    </div>

                </form>
            </div>
        </header>

        <!-- --------------------------------- conteudo ---------------------------- -->
        <?php
        $Url[1] = (empty($Url[1]) ? null : $Url[1]);

        if (file_exists(REQUIRE_PATH . '/' . $Url[0] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '.php';
        elseif (file_exists(REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php')):
            require REQUIRE_PATH . '/' . $Url[0] . '/' . $Url[1] . '.php';
        else:
            require REQUIRE_PATH . '/404.php';
        endif;
        ?>
        <!-- --------------------------------- conteudo ---------------------------- -->       

        <!-- --------------------------------------------FOOTER ----------------------------------- -->	
        <footer class="main_footer container bg-gray">                       
            <div class="container bg-graylight">
                <div class="content">             
                    <section class="box_newletter"> 
                        <h1 class="titulo_newletter al-center">RECEBA OS IMÓVEIS CADASTRADOS NO SITE DIRETAMENTE EM SEU E-MAIL</h1>
                        <h2 class="titulo_newletter_b al-center"> CADASTRE-SE ABAIXO E FIQUE LIGADO! </h2>
                        <form action="https://integracao.nitronews.com.br/integracao.php"  method="post">                        
                            <div class="column column-4">
                                <input type="text" name="nome" placeholder="Informe seu nome"> 
                            </div>
                            <div class="column column-4">
                                <input type="email" name="email" placeholder="Informe seu E-mail"> 
                            </div>                            
                            <div class="column column-4">
                                <input type="submit" class="btn btn-red" style="height: 48px;" name="enviar" value="Enviar">
                            </div>                        
                            <input type="hidden" name="acao" value="1" />
                            <input type="hidden" name="chave" value="417401fb98b8a22f1eb9fb551958567e39d0e2d3174ce8d" />
                            <input type="hidden" name="urlretorno" value="http://paulooctavioaluguel.com.br/novo/" />
                            <!-- caso sua página não seja em UTF-8, remova a linha abaixo -->
                            <input type="hidden" name="decodifica_utf8" value="1" />                            
                        </form>
                        
                    </section>  
                    <div class="clear"></div>
                </div>
            </div>


            <div class="copy container">
                <section class="content">
                    <div class="box_menu column column-6">
                        <h1>INSTITUCIONAL</h1>
                        <ul class="menu_footer">
                            <li><a href="<?= HOME; ?>/quem-somos">QUEM SOMOS  </a><span> | </span></li>
                            <li><a href="#">IMPRENSA</a><span> | </span></li>
                            <li><a href="#">PUBLICIDADE</a><span> | </span></li>
                            <li><a href="#"> TRABALHE CONOSCO</a></li>
                        </ul>
                    </div>
                    <div class="text_copy  column column-3"><p>&copy; PAULOOCTAVIO - TODOS OS DIREITOS RESERVADOS</p></div>
                    <div class="logo_footer column column-2" > 
                        <a href="#" class="lg_footer">
                            <img src="<?= INCLUDE_PATH; ?>/img/logo_footer.png" alt=""/>
                        </a>                       
                    </div>
                    <div class="clear"></div>
                </section>

            </div>   
        </footer>

        <script src="<?= INCLUDE_PATH; ?>/js/jquery-3.2.1.min.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jcarousel.responsive.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/main.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/fontawesome.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jquery.jcarousel.min.js"  ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/slider_show.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/carregarImoveis.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/filtroGalMapStret.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jcarousellite.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/carroussel.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jquery.jcarousel.min.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/linkScroll.js"></script>
        
        
        
        <!--pushassit-->
        <script src="https://cdn.pushassist.com/account/assets/psa-paulooctavio.js" async="async"></script>
        
        <!--CHAT-->
        <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/590c8f3564f23d19a89b0ed2/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
        </script>
        <!--End of Tawk.to Script-->

    </body>
</html>