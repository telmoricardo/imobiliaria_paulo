<?php
require_once '../app/config.php';

sleep(1);

//echo $_SERVER['REQUEST_URI']; 

$categoria = $_SESSION['cod_category'];
echo $categoria;