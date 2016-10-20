<?php
require('libs/Smarty.class.php');

class AdminCategoriaView
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

  function categorias($categorias){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('adminListadoCategorias.tpl');
  }

  // Muestra el formulario para modificar una categoria
  function modificarCategorias($categoria){
    $this->smarty->assign('cat_nombre',$categoria["cat_nombre"]);
    $this->smarty->assign('cat_descripcion',$categoria["cat_descripcion"]);
    $this->smarty->display('adminModificarCategoria.tpl');
  }

  // Muestra el formulario para agregar una categoria
  function agregarCategorias(){
    $this->smarty->display('adminAgregarCategorias.tpl');
  }
}
?>
