<?php
require('controllers/AdminProductoController.php');
require('controllers/AdminMarcaController.php');
require('controllers/AdminCategoriaController.php');

require ('config/ConfigApp.php');

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $productoController = new AdminProductoController();
  $productoController->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$PRODUCTOS:
    $productoController = new AdminProductoController();
    if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
      $productoController->iniciar();
    }
    else {
    switch ($_REQUEST[ConfigApp::$SECCION]){
        case ConfigApp::$AGREGAR:
          $productoController->agregarProductos();
        break;
        case ConfigApp::$MODIFICAR:
          $productoController->modificarProductos();
        break;
        case ConfigApp::$BORRAR:
          $productoController->eliminarProducto();
        break;
        default:
          $productoController->productos();
        break;
    }
  }
  break;

  case ConfigApp::$CATEGORIAS:
    $categoriaController = new AdminCategoriaController();
    if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
        $categoriaController->categorias();
    }
    else {
      switch ($_REQUEST[ConfigApp::$SECCION]){
          case ConfigApp::$AGREGAR:
            $categoriaController->agregarCategorias();
          break;
          case ConfigApp::$MODIFICAR:
            $categoriaController->modificarCategorias();
          break;
          case ConfigApp::$BORRAR:
            $categoriaController->eliminarCategorias();
          break;
          default:
            $categoriaController->categorias();
          break;
      }
    }
    break;
  case ConfigApp::$MARCAS:
  $marcaController = new AdminMarcaController();
  if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
      $marcaController->marcas();
  }
  else {
    switch ($_REQUEST[ConfigApp::$SECCION]){
        case ConfigApp::$AGREGAR:
          $marcaController->agregarMarcas();
        break;
        case ConfigApp::$MODIFICAR:
          $marcaController->modificarMarcas();
        break;
        case ConfigApp::$BORRAR:
          $marcaController->eliminarMarcas();
        break;
        default:
          $marcaController->marcas();
        break;
    }
  }
  break;
  default:
    $productoController->iniciar();
    break;
}
?>
