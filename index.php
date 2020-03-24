<?php

include_once('views/toto.php');

$request = $_SERVER['REQUEST_URI'];
error_log("---------------- DIR ---------------------" . __DIR__);
error_log("----------------- REQUEST --------------------" . $request);
error_log("----------------- SERVER --------------------" );
print "<pre>";
print_r($_SERVER);
print "</pre>";

switch ($request) {
  case '/':
    require __DIR__ . '/views/accueil.php';
    break;
  case '/toto':
    require __DIR__ . '/views/toto.php';
  break;
  case '':
    require __DIR__ . '/views/accueil.php';
    break;
  default:
    http_response_code(404);
    require __DIR__ . '/views/accueil.php';
    break;
}
?>