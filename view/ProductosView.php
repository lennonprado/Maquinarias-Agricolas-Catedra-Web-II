<?php
require('libs/Smarty.class.php');

class ProductosView
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

  function inicio(){
    $this->smarty->display('index.tpl');
  }

  function listado($todos,$filtro=NULL){
    $this->smarty->assign('filtro',$filtro);
    $this->smarty->assign('todos',$todos);
    $this->smarty->display('listado.tpl');
  }

  function home($categorias,$marcas,$nuevos,$destacados){
    $this->smarty->assign('categorias',$categorias);
    $this->smarty->assign('marcas',$marcas);
    $this->smarty->assign('nuevos',$nuevos);
    $this->smarty->assign('destacados',$destacados);
    $this->smarty->display('home.tpl');
  }

  function unidad($unidad,$imagenes,$caracteristicas,$destacados,$usuario){
    $this->smarty->assign('unidad',$unidad);
    $this->smarty->assign('caracteristicas',$caracteristicas);
    $this->smarty->assign('imagenes',$imagenes);
    $this->smarty->assign('destacados',$destacados);
    $this->smarty->assign('usuario',$usuario);
    $this->smarty->display('unidad.tpl');
  }

  function contacto(){
    $this->smarty->display('contacto.tpl');
  }

  function nosotros(){
    $this->smarty->display('nosotros.tpl');
  }

}



 ?>
