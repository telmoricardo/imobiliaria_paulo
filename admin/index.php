<?php
require_once '../app/config.php';

$retorno = "&nbsp;";

if (isset($_SESSION["entrar"])) {
    header("Location: painel.php");
}


if (filter_input(INPUT_GET, "msg", FILTER_SANITIZE_NUMBER_INT)) {
    if (filter_input(INPUT_GET, "msg", FILTER_SANITIZE_NUMBER_INT) == 1) {
        $retorno = "<div class=\"alert alert-danger\" role=\"alert\">Acesso negado!!!</div>";
    } else {
        $retorno = "<div class=\"alert alert-warning\" role=\"alert\">Você fez Logout.</div>";
    }
}

if (filter_input(INPUT_POST, "btnEntrar", FILTER_SANITIZE_STRING)) {

    $usuarioController = new UsuarioController();
    $user = filter_input(INPUT_POST, "txtUsuario", FILTER_SANITIZE_STRING);
    $pass = filter_input(INPUT_POST, "txtSenha", FILTER_SANITIZE_STRING);
    $permissao = 1;
    
    
    $resultado = $usuarioController->AutenticarUsuario($user, $pass, $permissao);

    if ($resultado != null) {
       
        $_SESSION["cod"] = $resultado->getCod();
        $_SESSION["nome"] = $resultado->getNome();
        $_SESSION["logado"] = true;
        header("Location: painel.php");
    } else {
        $retorno = "<div class=\"alert alert-danger\" role=\"alert\">Usuário ou senha inválido.</div>";
    }
}
?>
<!DOCTYPE html>
<html >
    <head>
        <meta charset="UTF-8">
        <title>Login Form with Materializecss</title>
    </head>

    <body>
    <html>

        <head>
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link href="css/materialize.min.css" rel="stylesheet" type="text/css"/>

        </head>

        <body>
            <div class="section"></div>
            <main>
                <center>
                    <div class="section"></div>

                    <h5 class="indigo-text">Por favor, faça login em sua conta</h5>
                    <div class="section"></div>

                    <div class="container">
                        <div class="z-depth-1 grey lighten-4 row" style="display: inline-block; padding: 32px 48px 0px 48px; border: 1px solid #EEE;">

                            <form class="col s12" method="post">
                                <div class='row'>
                                    <div class='col s12'>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='text' name='txtUsuario' id='txtUsuario' />
                                        <label for='email'>Digite seu Usuario</label>
                                    </div>
                                </div>

                                <div class='row'>
                                    <div class='input-field col s12'>
                                        <input class='validate' type='password' name='txtSenha' id='txtSenha' />
                                        <label for='password'>Digite sua senha</label>
                                    </div>
                                    <label style='float: right;'>
                                        <a class='pink-text' href='#!'><b>Esqueceu a senha?</b></a>
                                    </label>
                                </div>

                                <br />
                                <center>
                                    <div class='row'>
                                        <input type="submit" name="btnEntrar" class='col s12 btn btn-large waves-effect indigo' value="Entrar">
                                        
                                    </div>
                                </center>
                            </form>
                        </div>
                    </div>
                    
                </center>

                <div class="section"></div>
                <div class="section"></div>
            </main>

            <script src="js/jquery.min.js" type="text/javascript"></script>
            <script src="js/materialize.min.js" type="text/javascript"></script>
        </body>

    </html>


</body>
</html>
