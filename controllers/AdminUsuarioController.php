<?php
require_once('view/AdminUsuarioView.php');
require_once('models/UsuarioModel.php');

class AdminUsuarioController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new UsuarioModel();
    $this->vista = new AdminUsuarioView();
  }

  // Listado de Usuarios
  function Usuarios(){
    $usuarios = $this->modelo->getUsuarios();
    $this->vista->usuarios($usuarios);
  }

  // Muestro el listado de agrego una categoria
  function agregarUsuarios(){
    if((isset($_POST['mar_nombre']))&&(isset($_POST['mar_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->agregarUsuarios($_POST['mar_nombre'],$_POST['mar_descripcion']);
      if($resultado > 0) header('Location: http://localhost/maquinarias/admin/usuarios/');
    }
    else{
      // muestro el formulario
      $this->vista->agregarUsuarios();
    }
  }

  // modifico una categoria que viene por get
  function modificarUsuarios(){
    if((isset($_POST['mar_nombre']))&&(isset($_POST['mar_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->modificarUsuarios($_GET["id"],$_POST['mar_nombre'],$_POST['mar_descripcion']);
      header('Location: http://localhost/maquinarias/admin/usuarios/');
    }
    else{
      // muestro el formulario
      $usuario = $this->modelo->getUsuario($_GET["id"]);
      $this->vista->modificarUsuarios($usuario);
    }
  }

  // Elimino una categoria y redirecciono al inicio de categorias
  function eliminarUsuarios(){
    $this->modelo->eliminarUsuarios($_GET["id"]);
    header('Location: http://localhost/maquinarias/admin/usuarios/');
  }

  function login(){
     $this->vista->login();
  }

}

 ?>
