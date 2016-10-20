<?php
require('view/AdminProductoView.php');
require('models/ProductosModel.php');

class AdminProductoController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new ProductosModel();
    $this->vista = new AdminProductoView();
  }

  function iniciar(){
    $productos = $this->modelo->getProductos();
    $this->vista->listado($productos);
  }

  // lista las categorias existentes (por defecto)
  function modificarProductos(){

     if(isset($_POST['modificarProducto']))
         {
            $this->modelo->modificarProducto($_GET['id'],$_POST);
            $this->vista->mostrarMensaje("Producto modificado correctamente!", "success");
         }

      if(isset($_POST['eliminarCaracteristica']))
         {
            $this->modelo->eliminarCaracteristica($_POST['id_eliminar_caracteristica']);
            $this->vista->mostrarMensaje("Caracteristica eliminada correctamente!", "danger");
         }

      if(isset($_POST['crearCaracteristica']))
         {
            $this->modelo->crearCaracteristica($_GET['id'],$_POST);
            $this->vista->mostrarMensaje("Caracteristica Creada correctamente!", "success");
         }

      if(isset($_POST['crearImagen'])){
         if(isset($_FILES['imagenes'])){
            $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
            if(count($imagenesVerificadas)>0){
               $this->modelo->crearImagen($_GET['id'],$imagenesVerificadas);
               $this->vista->mostrarMensaje("La imagen se cargo correctamente!", "success");
            }
            else{
               $this->vista->mostrarMensaje("Error con las imagenes", "danger");
            }
         }
         else{
              $this->vista->mostrarMensaje("La imagen es requerida","danger");
          }
      }

      if(isset($_POST['id_destacar_imagen']))
         {
            $this->modelo->destacarImagen($_GET['id'],$_POST['id_destacar_imagen']);
            $this->vista->mostrarMensaje("La imagen se destaco correctamente!", "success");
         }

      if(isset($_POST['id_eliminar_imagen']))
         {
            $this->modelo->eliminarImagen($_POST['id_eliminar_imagen']);
            $this->vista->mostrarMensaje("Imagen eliminada correctamente!", "danger");
         }

       $imagenes = $this->modelo->getImagenes($_GET['id']);
       $unidad = $this->modelo->getProducto($_GET['id']);
       $caracteristicas = $this->modelo->getCaracteristicas($_GET['id']);
       $marcas = $this->modelo->getMarcas();
       $categorias = $this->modelo->getCategorias();
       $this->vista->modificarProducto($unidad,$imagenes,$caracteristicas,$marcas,$categorias);

  }

  function agregarProductos(){
     $marcas = $this->modelo->getMarcas();
     $categorias = $this->modelo->getCategorias();
     if(isset($_POST['agregarProducto']))
         {
         $id_producto=$this->modelo->agregarProducto($_POST);
         $this->vista->mostrarMensaje("Producto Creado correctamente!", "success");
         $imagenes = $this->modelo->getImagenes($id_producto);
         $unidad = $this->modelo->getProducto($id_producto);
         $caracteristicas = $this->modelo->getCaracteristicas($id_producto);
         $this->vista->modificarProducto($unidad,$imagenes,$caracteristicas,$marcas,$categorias);
         }
      else
         {
         $this->vista->agregarProducto($marcas,$categorias);
         }
 }

 function eliminarProducto(){
      $this->modelo->eliminarProducto($_GET['id']);
      $this->vista->mostrarMensaje("Producto eliminada correctamente!", "danger");
      $this->iniciar();
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
}

 ?>
