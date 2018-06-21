<?php

sleep(1);

require_once '../app/config.php';
$imovelController = new ImovelController();
$helper = new Helper();

switch ($_POST['acao']):

    case 'ler':
        $offset = $_POST['offset'];
        $limit = $_POST['limit'];

        $imovelRecentes = $imovelController->ListarImovelLimite($offset, $limit);

        if ($imovelRecentes != null):
            foreach ($imovelRecentes as $imovel):
                echo '<article class="thumb_destaques"> ';
                echo '<a href="./single/' . $imovel->getUrl() . '" >';
                echo '<img src="tim.php?src=upload/' . $imovel->getThumb() .'&w=720&h=500&zc=1" title="'.$imovel->getTitulo().'" alt="'.$imovel->getTitulo().'">';
                echo '<figcaption>';
                echo '<h1>' . $helper->limitarTexto($imovel->getTitulo(), 35) . '</h1>';
                echo '</figcaption>';
                echo '</a>';
                echo '</article>';
            endforeach;
        else:
            echo '3';
        endif;
        break;

    default :
        echo '2';
endswitch;








