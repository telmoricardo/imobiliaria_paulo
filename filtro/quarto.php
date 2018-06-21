<?php
require_once '../app/config.php';
$imovelController = new ImovelController();

//através do tipo que pegará a quantidade de quartos
$tipo = $_POST['tipo'];
$listarQuartos = $imovelController->retornaImovelQuarto($tipo);
echo '<option value="">Selecione os Quartos</option>';

foreach ($listarQuartos as $quartos):    
    echo '<option value="'.$quartos->getQuartos().'">'.$quartos->getQuartos().'</option>';   
endforeach;