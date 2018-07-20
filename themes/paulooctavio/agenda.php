<?php
$endereco = $_SERVER ['REQUEST_URI'];
$endereco = explode('/', $endereco);

$ehDia = $endereco[4];
$ehHorario = $endereco[5];

function horario($valor) {
    if ($valor == 1):
        return $horario = "08:00h às 10:00h";
    elseif ($valor == 2):
        return $horario = "10:00h às 12:00h";
    elseif ($valor == 3):
        return $horario = "12:00h às 14:00h";
    elseif ($valor == 4):
        return $horario = "14:00h às 16:00h";
    elseif ($valor == 5):
        return $horario = "16:00h às 18:00h";
    endif;
}
?>
<section class="container">
    <div class="content agendar">
        <h1>Agende a sua visita</h1>
        <p>Algumas informações importantes. Sua visita será acompanhada por um corretor e até 4 outros interessados.</p>
        <?php
        switch ($ehDia):
            case 'segunda':
                echo '<h2>Segunda-Feira, ' . horario($ehHorario) . '</h2>';
                break;
            case 'terca':
                echo '<h2>Terça-Feira, ' . horario($ehHorario) . '</h2>';
                break;
            case 'quarta':
                echo '<h2>Quarta-Feira, ' . horario($ehHorario) . '</h2>';
                break;
            case 'quinta':
                echo '<h2>Quinta-Feira, ' . horario($ehHorario) . '</h2>';
                break;
            case 'sexta':
                echo '<h2>Sexta-Feira,' . horario($ehHorario) . '</h2>';
                break;
        endswitch;
        ?>


    </div>


    <div class="row">
        <div class="content">             
            <section> 
                <form method="post">                        
                    <div class="column column-3">
                        <input type="text" name="nome" placeholder="Informe seu nome"> 
                    </div>
                    <div class="column column-3">
                        <input type="email" name="email" placeholder="Informe seu E-mail"> 
                    </div>                            
                    <div class="column column-3">
                        <input type="text" name="telefone" placeholder="Informe seu E-mail"> 
                    </div>                            
                    <div class="column column-3">
                        <input type="submit" class="btn btn-red" style="height: 48px;" name="enviar" value="Enviar">
                    </div>                       

                </form>

            </section>  
            <div class="clear"></div>
        </div>
    </div>

    <div class="clear"></div>
</section>
