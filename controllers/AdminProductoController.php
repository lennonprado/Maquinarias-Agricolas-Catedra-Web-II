<?php
require_once('view/AdminProductoView.php');
require_once('models/ProductoModel.php');
require_once('models/MarcaModel.php');
require_once('models/CategoriaModel.php');

class AdminProductoController
{
  private $vista;
  private $productoModelo;
  private $marcaModelo;
  private $categoriaModelo;

  function __construct()
  {
    $this->productoModelo = new ProductoModel();
    $this->marcaModelo = new MarcaModel();
    $this->categoriaModelo = new CategoriaModel();
    $this->vista = new AdminProductoView();
  }

  function iniciar(){
    $productos = $this->productoModelo->getProductos();
    $this->vista->listado($productos);
  }

  // lista las categorias existentes (por defecto)
  function modificarProductos(){

     if(isset($_POST['modificarProducto']))
         {
            $this->productoModelo->modificarProducto($_GET['id'],$_POST);
            $this->vista->mostrarMensaje("Producto modificado correctamente!", "success");
         }

      if(isset($_POST['eliminarCaracteristica']))
         {
            $this->productoModelo->eliminarCaracteristica($_POST['id_eliminar_caracteristica']);
            $this->vista->mostrarMensaje("Caracteristica eliminada correctamente!", "danger");
         }

      if(isset($_POST['crearCaracteristica']))
         {
            $this->productoModelo->crearCaracteristica($_GET['id'],$_POST);
            $this->vista->mostrarMensaje("Caracteristica Creada correctamente!", "success");
         }

      if(isset($_POST['crearImagen'])){
         if(isset($_FILES['imagenes'])){
            $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
            if(count($imagenesVerificadas)>0){
               $this->productoModelo->crearImagen($_GET['id'],$imagenesVerificadas);
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
            $this->productoModelo->destacarImagen($_GET['id'],$_POST['id_destacar_imagen']);
            $this->vista->mostrarMensaje("La imagen se destaco correctamente!", "success");
         }

      if(isset($_POST['idsImagenEliminar']))
         {
            $id_elimiar=$_POST['idsImagenEliminar'];
            for($r=0;$r<count($id_elimiar);$r++){
               $this->productoModelo->eliminarImagen($id_elimiar[$r]);
            }
            $this->vista->mostrarMensaje("Imagen/s eliminada correctamente!", "danger");
         }

       $imagenes = $this->productoModelo->getImagenes($_GET['id']);
       $unidad = $this->productoModelo->getProducto($_GET['id']);
       $caracteristicas = $this->productoModelo->getCaracteristicas($_GET['id']);
       $marcas = $this->marcaModelo->getMarcas();
       $categorias = $this->categoriaModelo->getCategorias();
       $this->vista->modificarProducto($unidad,$imagenes,$caracteristicas,$marcas,$categorias);

  }

  function agregarProductos(){
     $marcas = $this->marcaModelo->getMarcas();
     $categorias = $this->categoriaModelo->getCategorias();
     if(isset($_POST['agregarProducto']))
         {
         $id_producto=$this->productoModelo->agregarProducto($_POST);
         $this->vista->mostrarMensaje("Producto Creado correctamente!", "success");
         $imagenes = $this->productoModelo->getImagenes($id_producto);
         $unidad = $this->productoModelo->getProducto($id_producto);
         $caracteristicas = $this->productoModelo->getCaracteristicas($id_producto);
         $this->vista->modificarProducto($unidad,$imagenes,$caracteristicas,$marcas,$categorias);
         }
      else
         {
         $this->vista->agregarProducto($marcas,$categorias);
         }
 }

 function eliminarProducto(){
      $this->productoModelo->eliminarProducto($_GET['id']);
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
