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

  function modificarProductos(){
    $imagenes = $this->modelo->getImagenes($_GET['id']);
    $unidad = $this->modelo->getProducto($_GET['id']);
    $caracteristicas = $this->modelo->getCaracteristicas($_GET['id_producto']);
    $this->vista->modificarProducto($unidad,$imagenes,$caracteristicas,);
  }

  function categorias(){
    $categorias = $this->modelo->getCategorias();
    $this->vista->categorias($categorias);
  }

  function marcas(){
    $marcas = $this->modelo->getMarcas();
    $this->vista->marcas($marcas);
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
