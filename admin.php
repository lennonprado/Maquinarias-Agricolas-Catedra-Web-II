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
    if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
      $controller->iniciar();
    }
    else {
    switch ($_REQUEST[ConfigApp::$SECCION]){
        case ConfigApp::$AGREGAR:
          $controller->agregarProductos();
        break;
        case ConfigApp::$MODIFICAR:
          $controller->modificarProductos();
        break;
        case ConfigApp::$BORRAR:
          $controller->eliminarProducto();
        break;
        default:
          $controller->productos();
        break;
    }
  }
  break;

  case ConfigApp::$CATEGORIAS:
    if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
        $controller->categorias();
    }
    else {
      switch ($_REQUEST[ConfigApp::$SECCION]){
          case ConfigApp::$AGREGAR:
            $controller->agregarCategorias();
          break;
          case ConfigApp::$MODIFICAR:
            $controller->modificarCategorias();
          break;
          case ConfigApp::$BORRAR:
            $controller->eliminarCategorias();
          break;
          default:
            $controller->categorias();
          break;
      }
    }
    break;
  case ConfigApp::$MARCAS:
  if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
      $controller->marcas();
  }
  else {
    switch ($_REQUEST[ConfigApp::$SECCION]){
        case ConfigApp::$AGREGAR:
          $controller->agregarMarcas();
        break;
        case ConfigApp::$MODIFICAR:
          $controller->modificarMarcas();
        break;
        case ConfigApp::$BORRAR:
          $controller->eliminarMarcas();
        break;
        default:
          $controller->marcas();
        break;
    }
  }
  break;
  default:
    $controller->iniciar();
    break;
}
?>
