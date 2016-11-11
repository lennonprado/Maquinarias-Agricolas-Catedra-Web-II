<?php
require_once('libs/Smarty.class.php');

class AdminUsuarioView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
    if(isset($_SESSION["user_name"])){
      $this->smarty->display('adminMenu.tpl');
    } 
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

  function usuarios($usuarios){
    $this->smarty->assign('usuarios',$usuarios);
    $this->smarty->display('adminListadoUsuarios.tpl');
  }

  // Muestra el formulario para modificar una categoria
  function modificarUsuarios($usuario){
    $this->smarty->assign('mar_nombre',$usuario["mar_nombre"]);
    $this->smarty->assign('mar_descripcion',$usuario["mar_descripcion"]);
    $this->smarty->display('adminModificarUsuario.tpl');
  }

  // Muestra el formulario para agregar una categoria
  function agregarUsuarios(){
    $this->smarty->display('adminAgregarUsuario.tpl');
  }

  function login(){
    $this->smarty->display('adminLogin.tpl');
  }


}
?>
