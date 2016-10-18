<?php
require('view/ProductosView.php');
require('models/ProductosModel.php');

class ProductosController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new ProductosModel();
    $this->vista = new ProductosView();
  }

  function iniciar(){
    $productos = $this->modelo->getProductos();
    $this->vista->inicio();
  }

  function nosotros(){
    $this->vista->nosotros();
  }

  function contacto(){
    $this->vista->contacto();
  }

  function home(){
    $marcas = $this->modelo->getCategoria();
    $destacados = $this->modelo->getProductos("usados");
    $nuevos = $this->modelo->getProductos("nuevos");
    $this->vista->home($marcas,$nuevos,$destacados);
  }

  function listado(){
    $todos = $this->modelo->getProductos();
    $this->vista->listado($todos);
  }

  function unidad(){
    $imagenes = $this->modelo->getImagenes($_GET['id_producto']);
    $destacados = $this->modelo->getProductos("usados");
    $unidad = $this->modelo->getProducto($_GET['id_producto']);
    $this->vista->unidad($unidad,$imagenes,$destacados);
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
