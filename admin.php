<?php
require('controllers/AdminController.php');
require ('config/ConfigApp.php');

$controller = new AdminController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$PRODUCTOS:
    $controller->iniciar();
    break;

  case ConfigApp::$MODIFICARPRODUCTOS:
      $controller->modificarProductos();
    break;

  case ConfigApp::$CATEGORIAS:
    $controller->categorias();
    break;

  case ConfigApp::$MARCAS:
     $controller->marcas();
    break;

  default:
    $controller->iniciar();
    break;
}
?>
