<?php
require_once('libs/Smarty.class.php');

class AdminComentarioView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->smarty->display('adminMenu.tpl');
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

  function comentarios($comentarios){
    $this->smarty->assign('comentarios',$comentarios);
    $this->smarty->display('adminListadoComentarios.tpl');
  }

  // Muestra el formulario para modificar una categoria
  function modificarComentarios($comentario){
    $this->smarty->assign('mar_nombre',$comentario["mar_nombre"]);
    $this->smarty->assign('mar_descripcion',$comentario["mar_descripcion"]);
    $this->smarty->display('adminModificarComentario.tpl');
  }

  // Muestra el formulario para agregar una categoria
  function agregarComentarios(){
    $this->smarty->display('adminAgregarComentario.tpl');
  }


}
?>
