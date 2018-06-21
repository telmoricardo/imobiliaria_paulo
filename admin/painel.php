<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <title>Painel Administrativo</title>
        <link href="css/boot.css" rel="stylesheet" type="text/css"/>
        <link href="css/painel.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <div class="admin-left">                
                <div class="admin-left-thumb">
                    <div class="admin-thumb">
                        <img src="images/man.png" alt=""/>
                    </div>
                    <h1>Telmo Ricardo</h1>
                </div>

                <div class="admin-left-menu">
                   <?php require_once './inc/menu.php'; ?>
                </div>

                <div class="clear"></div>
            </div>

            <div class="admin-right">
                <header class="admin-right-header">                    
                    <div class="admin-header-top">  
                        <div class="admin-header-left">
                            <p>Bem-vindo(a) ao Work Controle, Hoje 14/05/2018</p>
                        </div>                        
                        <div class="admin-header-right">
                            <a href="#">
                                <img class="exit" src="images/exit.png"> Sair
                            </a>
                        </div>
                    </div>
                </header>

                <hr class="linha">

                <footer class="admin-header-footer">                    
                    <div class="painel">
                        <img src="images/house-outline.png"><h1>Painel Administrativo</h1>
                        <p>Work Controller / <a href="#">Painel</a></p>
                    </div>                    
                </footer>  
                
                <hr class="linha">

                <div class="clear"></div>

                <!--CONTEUDO DO SITE-->
                <div class="conteudo-row">
                <?php
                    $pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

                    $arrayPaginas = array(
                        "dashboard" => "View/painel.php",
                        "post" => "View/Post/post.php",
                        "listar-post" => "View/Post/listarpost.php",
                    );
                    
                    if($pagina):
                        $encontrou = FALSE;
                    
                        foreach ($arrayPaginas as $page => $key) :
                            if ($pagina == $page):
                                $encontrou = true;
                                require_once($key);
                            endif;
                        endforeach;
                        
                        if (!$encontrou):
                            require_once("View/painel.php");
                        endif;
                    else:
                        require_once("View/painel.php");
                    endif;
                
                    
                ?>
                    </div>
                <!--CONTEUDO DO SITE-->

                <div class="footer bg-azul">
                    <div class="content">
                        <p><?= date("Y") ?> - Todos os direitos reservados</p>
                    </div>
                </div>

                <div class="clear"></div>
            </div>


        </div>
    </body>
    <script src="js/jquery-2.2.4.js" type="text/javascript"></script>
    <script src="js/fontawesome.js" type="text/javascript"></script>
</html>
