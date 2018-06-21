<?php

$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_STRING);

$arrayPaginas = array(
    "home" => "View/dashboard.php",
    "user" => "View/User/user.php",
    "imovel" => "View/Imovel/imovel.php",
    "imovelList" => "View/Imovel/imovelList.php",
    "imovelUpdate" => "View/Imovel/imovelUpdate.php",
    "mapa" => "View/Imovel/imovelMapa.php",
    "galeria" => "View/Imovel/GerenciarGaleria.php",
    "artigo" => "View/Artigo/artigo.php",
    "listarArtigos" => "View/Artigo/listarArtigos.php",
    "agente" => "View/Agente/agente.php"
        
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