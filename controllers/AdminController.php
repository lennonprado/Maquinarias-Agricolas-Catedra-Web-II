<?php
require('view/AdminView.php');
require('models/ProductosModel.php');

class AdminController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new ProductosModel();
    $this->vista = new AdminView();
  }

  function iniciar(){
    $productos = $this->modelo->getProductos();
    $this->vista->listado($productos);
  }

  // lista las categorias existentes (por defecto)
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
      $resultado = $this->modelo->modificarMarca($_GET["id"],$_POST['mar_nombre'],$_POST['mar_descripcion']);
      header('Location: http://localhost/maquinarias/admin/marcas/');
    }
    else{
      // muestro el formulario
      $categoria = $this->modelo->getMarcas($_GET["id"]);
      $this->vista->modificarMarcas($marca);
    }
  }

  // Elimino una categoria y redirecciono al inicio de categorias
  function eliminarMarcas(){
    $this->modelo->eliminarMarca($_GET["id"]);
    header('Location: http://localhost/maquinarias/admin/marcas/');
  }

  function getImagenesVerificadas($imagenes){
    $imagenesVerificadas = array();
    for ($i=0; $i < count($imagenes['size']); $i++) {
      if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
          $imagen_aux = array();
          $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
          $imagen_aux['name']=$imagenes['name'][$i];
          $imagenesVerificadas[]=$imagen_aux;
      }
    }

    return $imagenesVerificadas;
  }

  function guardar(){
    $producto = $_POST['prod_nombre'];
    if(isset($_FILES['imagenes'])){
      $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
      if(count($imagenesVerificadas)>0){
        if(!$this->filtro($tarea)){
          $this->modelo->crearTarea($tarea,$imagenesVerificadas);
          $this->vista->mostrarMensaje("La tarea se creo con imagen y todo!", "success");
        }
      }
      else{
        $this->vista->mostrarMensaje("Error con las imagenes", "danger");
      }
    }
    else{
        $this->vista->mostrarMensaje("La imagen es requerida","danger");
    }

    $this->iniciar();
  }

  function eliminar(){
    $key = $_GET['id_producto'];
    $this->modelo->eliminarProducto($key);
    $productos = $this->modelo->getProductos();
    $this->vista->getLista($productos);
  }


  function filtro($tarea){
    return preg_match('/podria/',$tarea);
  }


}

 ?>
