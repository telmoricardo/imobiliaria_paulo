<?php

require_once '../app/config.php';
$tipoController = new TipoController();
                        $listarTipos = $tipoController->ListarTipo(); 
                        
$tipo = $_POST['slTipo'];
$local = $_POST['slLocal'];

echo $tipo.'<br>';
echo $local.'<br>';

