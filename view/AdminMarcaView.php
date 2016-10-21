<?php
require_once('libs/Smarty.class.php');

class AdminMarcaView
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
