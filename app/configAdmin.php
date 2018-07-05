<?php 

session_start();
ob_start();

define('HOME', 'https://localhost/works/paulo/admin');
define('THEME', 'admin');

define('INCLUDE_PATH', HOME . '/themes/' . THEME);
define('REQUIRE_PATH', 'themes/' . THEME);

$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
$setUrl = (empty($getUrl) ? 'index' : $getUrl);
$Url = explode('/', $setUrl);

require_once 'Autoload.php';


