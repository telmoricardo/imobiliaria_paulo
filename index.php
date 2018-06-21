<?php require_once './app/config.php';?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Paulo Octavio Imóveis - O melhor e mais completo site de imóveis, encontre seu imóvel para alugar</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">     
        <link rel="icon" type="image/png" href="img/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700" rel="stylesheet">
        <link href="<?= INCLUDE_PATH;?>/css/font-awesome.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH;?>/css/reset.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH;?>/css/estilo.css" rel="stylesheet" type="text/css"/>
        <link href="<?= INCLUDE_PATH;?>/css/jcarousel.responsive.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!------------------------------- CABECALHO ---------------------------->
        <header class="main_cabecalho container">
            <div class="content">                
                <!----------------------------------- LOGO --------------------------------->
                <div class="box_header">
                    <a href="<?= HOME;?>" class="main_logo">
                        <h1 class="font-zero">Paulo Octavio Aluguel</h1>
                        <div class="logo">
                            <img src="<?= INCLUDE_PATH;?>/img/logo-po.png"  alt="Paulo Octavio Aluguel" title="Paulo Octavio Aluguel"/>                            
                        </div>
                    </a>      

                    <!----------------------------------- MENU --------------------------------->
                    <div class="main_nav">
                        <ul class="menu">                        
                            <li><a href="<?= HOME;?>"> INICIAL</a></li>
                            <li><a href="<?= HOME;?>/favoritos">MEUS FAVORITOS</a></li>
                            <li><a href="<?= HOME;?>/quero-alugar"> QUERO ALUGAR</a></li>
                            <li><a href="http://www.paulooctavio.com.br/" target="_blank"> QUERO COMPRAR</a></li>
                            <li><a href="<?= HOME;?>/blog">BLOG </a></li>
                            <li><a href="<?= HOME;?>/contato">CONTATO</a></li>                        
                            <li><a href="<?= HOME;?>/cadastrar">CADASTRE-SE</a></li>                        
                            <li><a href="<?= HOME;?>/login">ACESSO <span class="fa fa-users"></span></a></li>                        
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </header>

        <!---------------------------------------FORMULARIO DE BUSCA------------------------------->
        <header class="pesquisa container">

    <div class="box_pesquisa content">             
        <form class="form_search_imovel" name="cadastro" method="post" action="<?= HOME;?>/imovel">
            <div class="column column-3">
                <label>QUAL TIPO DE IMÓVEL DESEJA ALUGAR?</label>

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
                    <option value="">Selecione o Tipo de Imóvel</option> <i class="fa fa-caret-down"></i>
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
                <label>QUANTOS QUARTOS ?</label>
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
                <label>VAGAS DE GARAGEM ?</label>                        

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
        <footer class="main_footer container">                       
            <div class="content">
                <div class="row">
                    <section class="column column-6 newletter">
                        <h1 class="font-zero">Receba informações sobre nossos imóveis</h1>
                        <div class="box_newletter"> 
                            <h1 class="titulo_newletter">
                                RECEBA OS IMÓVEIS CADASTRADOS NO SITE DIRETAMENTE
                                EM SEU E-MAIL
                            </h1>
                            <h2 class="titulo_newletter_b"> CADASTRE-SE ABAIXO E FIQUE
                                LIGADO!
                            </h2>
                            <form class="form_newletter">
                                <input class="email" type="email" name="email" placeholder="CADASTRAR E-MAIL"> 
                                <input class="btn btn_newletter" type="submit" name="submit" value="Enviar"> 
                            </form>
                        </div>
                    </section>
                    <section class="column column-6 helper">
<!--                        <h1 class="font-zero">Oi sou a Sandra!Posso Ajudar</h1>
                        <div>
                            <span class="thumb-img">. </span>
                        </div>-->

                    </section>
                </div>
            </div>


            <div class="copy container">
                <div class="content">

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
                            <img src="<?= REQUIRE_PATH; ?>/img/grupopo.png" alt=""/>
                        </a>
                    </div>

                </div>
            </div>   
        </footer>

        <script src="<?= INCLUDE_PATH; ?>/js/jquery-3.2.1.min.js"  ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jcarousel.responsive.js"  ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/main.js"  ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/fontawesome.js"  ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jquery.jcarousel.min.js"  ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/slider_show.js"  ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/carregarImoveis.js" ></script>
        <script src="<?= INCLUDE_PATH; ?>/js/filtroGalMapStret.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jcarousellite.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/carroussel.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/jquery.jcarousel.min.js"></script>
        <script src="<?= INCLUDE_PATH; ?>/js/linkScroll.js"></script>
        
        
    </body>
</html>