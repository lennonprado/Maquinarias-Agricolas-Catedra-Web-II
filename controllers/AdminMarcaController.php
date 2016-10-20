<?php
require('view/AdminMarcaView.php');
require('models/MarcaModel.php');

class AdminMarcaController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new MarcaModel();
    $this->vista = new AdminMarcaView();
  }

  // Listado de marcas
  function marcas(){
    $marcas = $this->modelo->getMarcas();
    $this->vista->marcas($marcas);
  }

  // Muestro el listado de agrego una categoria
  function agregarMarcas(){
    if((isset($_POST['mar_nombre']))&&(isset($_POST['mar_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->agregarMarcas($_POST['mar_nombre'],$_POST['mar_descripcion']);
      if($resultado > 0) header('Location: http://localhost/maquinarias/admin/marcas/');
    }
    else{
      // muestro el formulario
      $this->vista->agregarMarcas();
    }
  }

  // modifico una categoria que viene por get
  function modificarMarcas(){
    if((isset($_POST['mar_nombre']))&&(isset($_POST['mar_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->modificarMarcas($_GET["id"],$_POST['mar_nombre'],$_POST['mar_descripcion']);
      header('Location: http://localhost/maquinarias/admin/marcas/');
    }
    else{
      // muestro el formulario
      $marca = $this->modelo->getMarca($_GET["id"]);
      $this->vista->modificarMarcas($marca);
    }
  }

  // Elimino una categoria y redirecciono al inicio de categorias
  function eliminarMarcas(){
    $this->modelo->eliminarMarcas($_GET["id"]);
    header('Location: http://localhost/maquinarias/admin/marcas/');
  }

}

 ?>
