<?php 

session_start();
ob_start();

define('HOME', 'http://paulooctavioaluguel.pc');
//define('HOME', 'http://paulooctavioaluguel.com.br/novo');
define('THEME', 'paulooctavio');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

require_once 'Autoload.php';


