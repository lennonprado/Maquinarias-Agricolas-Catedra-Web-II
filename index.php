<?php
require('controllers/ProductoController.php');
require ('config/ConfigApp.php');

$controller = new ProductoController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$HOME:
    $controller->home();
    break;
  case ConfigApp::$CONTACTO:
    $controller->contacto();
    break;
  case ConfigApp::$UNIDAD:
    $controller->unidad();
    break;
  case ConfigApp::$NOSOTROS:
    $controller->nosotros();
    break;
    case ConfigApp::$LISTADO:
      $controller->listado();
      break;
  default:
    $controller->iniciar();
    break;
}
?>
