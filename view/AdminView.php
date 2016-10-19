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
  /* categorias */
  // Lista las categorias
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

  /* Marcas */
  function marcas($marcas){
    $this->smarty->assign('marcas',$marcas);
    $this->smarty->display('adminListadoMarcas.tpl');
  }

  // Muestra el formulario para modificar una categoria
  function modificarMarcas($marca){
    $this->smarty->assign('mar_nombre',$marca["mar_nombre"]);
    $this->smarty->assign('mar_descripcion',$marca["mar_descripcion"]);
    $this->smarty->display('adminModificarMarca.tpl');
  }

  // Muestra el formulario para agregar una categoria
  function agregarMarcas(){
    $this->smarty->display('adminAgregarMarca.tpl');
  }


}
?>
