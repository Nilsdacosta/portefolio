<?php

$request = $_SERVER['REQUEST_URI'];
error_log("---------------- DIR ---------------------" . __DIR__);
error_log("----------------- REQUEST --------------------" . $request);
switch ($request) {
  case '/':
    require __DIR__ . '/views/accueil.php';
    
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