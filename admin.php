<?php
require('controllers/AdminController.php');
require ('config/ConfigApp.php');

$productoController = new AdminProductoController();
$marcaController = new AdminMarcaController();
$categoriaController = new AdminCategoriaController();


if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $productoController->iniciar();
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$PRODUCTOS:
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
    if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
        $categoiraController->categorias();
    }
    else {
      switch ($_REQUEST[ConfigApp::$SECCION]){
          case ConfigApp::$AGREGAR:
            $categoiraController->agregarCategorias();
          break;
          case ConfigApp::$MODIFICAR:
            $categoiraController->modificarCategorias();
          break;
          case ConfigApp::$BORRAR:
            $categoiraController->eliminarCategorias();
          break;
          default:
            $categoiraController->categorias();
          break;
      }
    }
    break;
  case ConfigApp::$MARCAS:
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
