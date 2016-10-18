<?php
require('libs/Smarty.class.php');

class AdminView
{
  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function agregarError($error){
    $this->smarty->assign('error',$error);
  }

  function mostrarMensaje($mensaje, $tipo){
    $this->smarty->assign('mensaje',$mensaje);
    $this->smarty->assign('tipoMensaje',$tipo);
  }

  // pagina inicial
  function listado($usados){
    $this->smarty->assign('usados',$usados);
    $this->smarty->display('adminListado.tpl');
  }

  function nuevo(){
    $this->smarty->display('adminNuevo.tpl');
  }

  function modificar($unidad,$caracteristicas,$imagenes){
    $this->smarty->assign('unidad',$unidad);
    $this->smarty->assign('caracteristicas',$caracteristicas);
    $this->smarty->assign('imagenes',$imagenes);
    $this->smarty->display('adminUnidad.tpl');
  }

  function categorias(){
    $this->smarty->display('adminCategorias.tpl');
  }

  function modificarCategorias($categoria){
    $this->smarty->assign('categoria',$categoria);
    $this->smarty->display('adminModificarCategoria.tpl');
  }


}
?>
