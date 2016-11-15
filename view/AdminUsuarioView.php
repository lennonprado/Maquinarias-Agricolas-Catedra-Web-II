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
    $this->smarty->assign('user_name',$usuario["user_name"]);
    $this->smarty->assign('user_pass',$usuario["user_pass"]);
    $this->smarty->assign('user_permisos',$usuario["user_permisos"]);    
    $this->smarty->display('adminModificarUsuario.tpl');
  }

  // Muestra el formulario para agregar una categoria
  function agregarUsuarios(){
    $this->smarty->display('adminAgregarUsuario.tpl');
  }

  function login($msj=NULL){
    if(!is_null($msj)){$this->smarty->assign('mensaje',$msj);}
    $this->smarty->display('adminLogin.tpl');
  }


}
?>
