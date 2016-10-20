<?php
require('libs/Smarty.class.php');

class AdminProductoView
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

 function agregarProducto($marcas,$categorias)
  {
    $this->smarty->assign('marcas',$marcas);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('adminAgregarProducto.tpl');
  }

  function modificarProducto($unidad,$imagenes,$caracteristicas,$marcas,$categorias){
    $this->smarty->assign('unidad',$unidad);
    $this->smarty->assign('caracteristicas',$caracteristicas);
    $this->smarty->assign('imagenes',$imagenes);
    $this->smarty->assign('marcas',$marcas);
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->display('adminUnidad.tpl');
  }

}
?>
