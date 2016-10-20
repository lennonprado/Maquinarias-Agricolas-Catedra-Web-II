<?php
require('view/AdminCategoriaView.php');
require('models/CategoriaModel.php');

class AdminCategoriaController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new CategoriaModel();
    $this->vista = new AdminCategoriaView();
  }

  function categorias(){
    $categorias = $this->modelo->getCategorias();
    $this->vista->categorias($categorias);
  }

  // Muestro el listado de agrego una categoria
  function agregarCategorias(){
    if((isset($_POST['cat_nombre']))&&(isset($_POST['cat_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->agregarCategoria($_POST['cat_nombre'],$_POST['cat_descripcion']);
      if($resultado > 0) header('Location: http://localhost/maquinarias/admin/categorias/');
    }
    else{
      // muestro el formulario
      $this->vista->agregarCategorias();
    }
  }

  // modifico una categoria que viene por get
  function modificarCategorias(){
    if((isset($_POST['cat_nombre']))&&(isset($_POST['cat_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->modificarCategoria($_GET["id"],$_POST['cat_nombre'],$_POST['cat_descripcion']);
      header('Location: http://localhost/maquinarias/admin/categorias/');
    }
    else{
      // muestro el formulario
      $categoria = $this->modelo->getCategoria($_GET["id"]);
      $this->vista->modificarCategorias($categoria);
    }
  }

  // Elimino una categoria y redirecciono al inicio de categorias
  function eliminarCategorias(){
    $this->modelo->eliminarCategoria($_GET["id"]);
    header('Location: http://localhost/maquinarias/admin/categorias/');
  }
}

 ?>
