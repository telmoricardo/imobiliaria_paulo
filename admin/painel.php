<?php
    require_once('../app/config.php');   
        $usuarioController = new UsuarioController();        
        if($usuarioController->IsLogginIn()){
?>
<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
        <link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

        <title>Painel Administrativo</title>

        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="viewport" content="width=device-width" />


        <!-- Bootstrap core CSS     -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" />

        <!-- Animation library for notifications   -->
        <link href="assets/css/animate.min.css" rel="stylesheet"/>

        <!--  Paper Dashboard core CSS    -->
        <link href="assets/css/paper-dashboard.css" rel="stylesheet"/>


        <!--  CSS for Demo Purpose, don't include it in your project     -->
        <link href="assets/css/demo.css" rel="stylesheet" />
        

        <!--  Fonts and icons     -->
        <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
        <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
        <link href="assets/css/themify-icons.css" rel="stylesheet">

    </head>
    <body>

        <div class="wrapper">
            <div class="sidebar" data-background-color="white" data-active-color="danger">

                <!--
                            Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
                            Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
                -->

                <div class="sidebar-wrapper">
                    <div class="logo">
                        <a href="?pagina=home" class="simple-text">
                            Painel Administrativo
                        </a>
                    </div>

                    <ul class="nav">
                        <li class="active">
                            <a href="?pagina=home">
                                <i class="ti-panel"></i>
                                <p>Painel Administrativo</p>
                            </a>
                        </li>
                        <li>
                            <a href="?pagina=user">
                                <i class="ti-user"></i>
                                <p>Perfil de Usuário</p>
                            </a>
                        </li>
                        <li>
                            <a href="?pagina=categoria">
                                <i class="ti-package"></i>
                                <p>Categoria</p>
                            </a>
                        </li>
                        <li>
                            <a href="?pagina=imovel">
                                <i class="ti-save-alt"></i>
                                <p>Imóveis</p>
                            </a>
                        </li>                        
                        <li>
                            <a href="?pagina=agente">
                                <i class="ti-user"></i>
                                <p>Cadastro de Agente</p>
                            </a>
                        </li>
                        <li>
                            <a href="?pagina=artigo">
                                <i class="ti-user"></i>
                                <p>Cadastro de Artigo</p>
                            </a>
                        </li>
                        
                        <li>
                            <a href="?pagina=cidade">
                                <i class="ti-view-list-alt"></i>
                                <p>Cidade</p>
                            </a>
                        </li>
                     </ul>
                </div>
            </div>

            <div class="main-panel">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar bar1"></span>
                                <span class="icon-bar bar2"></span>
                                <span class="icon-bar bar3"></span>
                            </button>
                            <a class="navbar-brand" href="#">Painel Administrativo</a>
                        </div>
                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav navbar-right">
                                <li>
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-panel"></i>
                                        <p>Stats</p>
                                    </a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="ti-user"></i>
                                        <p class="notification">5</p>
                                        <p>Perfil do Usuário</p>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu">                                       
                                        <li><a href="#"><?php echo strtoupper($_SESSION['nome']); ?></a></li>
                                        <li><a href="logout.php">Sair</a></li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="ti-settings"></i>
                                        <p>Configurações</p>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                </nav>
                <?php
        }else{
            header('location: index.php');
        }

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "home" => "View/dashboard.php",
    "categoria" => "View/Categoria/categoria.php",
    "listarCategoria" => "View/Categoria/listar.php",
    "updateCategoria" => "View/Categoria/atualizar.php",
    "user" => "View/User/user.php",
    "imovel" => "View/Imovel/imovel.php",
    "listar" => "View/Imovel/listar.php",
    "atualizar" => "View/Imovel/atualizar.php",    
    "galeria" => "View/Imovel/GerenciarGaleria.php",
    "cidade" => "View/Cidade/cidade.php",
    "listarCidade" => "View/Cidade/listar.php"
    
);

if ($pagina) {
    $encontrou = false;
    foreach ($arrayPaginas as $page => $key) {
        if ($pagina == $page) {
            $encontrou = true;
            require_once($key);
        }
    }
    if (!$encontrou) {
        require_once("View/dashboard.php");
    }
} else {
    require_once("View/dashboard.php");
}

?>
 <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul>

                                <li>
                                    <a href="#">
                                        Inove Publicidade
                                    </a>
                                </li>
                                
                            </ul>
                        </nav>
                        <div class="copyright pull-right">
                            &copy; <script>document.write(new Date().getFullYear())</script>, feito com <i class="fa fa-heart heart"></i> de <a href="#">Inove Publicidade</a>
                        </div>
                    </div>
                </footer>

            </div>
        </div>


    </body>

    <!--   Core JS Files   -->
     <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

    <!--  Checkbox, Radio & Switch Plugins -->
    <script src="assets/js/bootstrap-checkbox-radio.js"></script>

    <!--  Charts Plugin -->
    <script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

    <!-- Paper Dashboard Core javascript and methods for Demo purpose -->
    <script src="assets/js/paper-dashboard.js"></script>

    <!-- Paper Dashboard DEMO methods, don't include it in your project! -->
    <script src="assets/js/demo.js"></script>
    
    <!--FUNÇÃO PARA PERSONALIZAÇÃO OS TEXTOS-->
    <script src="assets/js/tinymce/tinymce.min.js" type="text/javascript"></script>
    <script src="assets/js/tinymce_funcao.js" type="text/javascript"></script>
    
    <!--FUNÇÃO PREVIEW IMAGEM -->
    <script src="assets/js/previewImagem.js" type="text/javascript"></script>
    
    <!--FUNÇÃO BUSCAR CEP -->
    <script src="assets/js/buscarCep.js" type="text/javascript"></script>
    
    <script type="assets/text/javascript">
    </script>

</html>
