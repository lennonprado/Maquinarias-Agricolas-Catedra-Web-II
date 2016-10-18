<?php
require('libs/Smarty.class.php');

class AdminView
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

  // pagina inicial
  function listado($productos){
    $this->smarty->assign('productos',$productos);
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

  function categorias($categorias){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('adminListadoCategorias.tpl');
  }

  function modificarCategorias($categoria){
    $this->smarty->assign('categoria',$categoria);
    $this->smarty->display('adminModificarCategoria.tpl');
  }

  function marcas($marcas){
    $this->smarty->assign('marcas',$marcas);
    $this->smarty->display('adminListadoMarcas.tpl');
  }



}
?>
