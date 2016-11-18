<?php session_start();
require('controllers/AdminProductoController.php');
require('controllers/AdminMarcaController.php');
require('controllers/AdminUsuarioController.php');
require('controllers/AdminCategoriaController.php');
require('controllers/AdminComentarioController.php');

require ('config/ConfigApp.php');

//controlo si esta logeado
if(!isset($_SESSION["user_name"])){
   $usuarioController = new AdminUsuarioController();
   if($_REQUEST['action']=='registrar')
      {
         $_POST['user_permisos']='Usuario';
         $usuarioController->agregarUsuariosWeb();
      }
   $usuarioController->login();
   die;
}
else{
   //controlo el tipo de usuario
   if($_SESSION['user_permisos']=='Usuario')
   {
      //session_destroy();
      if($_REQUEST['action']=='salir')
         {session_destroy();
          $location='Location: http://localhost/maquinarias/';
         }
      header('Location: http://localhost/maquinarias/');
      die;
   }
}

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

  case ConfigApp::$USUARIOS:
  $usuarioController = new AdminUsuarioController();
  if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
      $usuarioController->usuarios();
  }
  else {
    switch ($_REQUEST[ConfigApp::$SECCION]){
        case ConfigApp::$AGREGAR:
          $usuarioController->agregarUsuarios();
        break;
        case ConfigApp::$MODIFICAR:
          $usuarioController->modificarUsuarios();
        break;
        case ConfigApp::$BORRAR:
          $usuarioController->eliminarUsuarios();
        break;
        case ConfigApp::$SALIR:
          $usuarioController->salir();
        break;
        default:
          $usuarioController->usuarios();
        break;
    }
  }
  break;

  case ConfigApp::$COMENTARIOS:
  $comentarioController = new AdminComentarioController();
  if (!array_key_exists(ConfigApp::$SECCION,$_REQUEST)){
      $comentarioController->comentarios();
  }
  else {
    switch ($_REQUEST[ConfigApp::$SECCION]){
        case ConfigApp::$AGREGAR:
          $comentarioController->agregarComentarios();
        break;
        case ConfigApp::$MODIFICAR:
          $comentarioController->modificarComentarios();
        break;
        case ConfigApp::$BORRAR:
          $comentarioController->eliminarComentarios();
        break;
        default:
          $comentarioController->comentarios();
        break;
    }
  }
  break;

  default:
    $productoController = new AdminProductoController();
    $productoController->iniciar();
    break;

}
?>
