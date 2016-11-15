<?php
require_once('view/ProductosView.php');
require_once('models/ProductoModel.php');
require_once('models/MarcaModel.php');
require_once('models/CategoriaModel.php');

class ProductosController
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
    $this->vista = new ProductosView();
  }

  function iniciar(){
    $productos = $this->productoModelo->getProductos();
    $this->vista->inicio();
  }

  function nosotros(){
    $this->vista->nosotros();
  }

  function contacto(){
    $this->vista->contacto();
  }

  function home(){
    $categorias = $this->categoriaModelo->getCategorias();
    $marcas = $this->marcaModelo->getMarcas();
    $destacados = $this->productoModelo->getProductos("usado");
    $nuevos = $this->productoModelo->getProductos("nuevo",3);
   // var_dump($nuevos);
    $this->vista->home($categorias,$marcas,$nuevos,$destacados);
  }

  function listado(){
     if(isset($_POST['tipo'])){
        switch($_POST['tipo']){
          case 'categoria':
            $todos = $this->productoModelo->getProductos(NULL,NULL,$_POST['filtro']);
            $cat = $this->categoriaModelo->getCategoria($_POST['filtro']);
            $filtro='Categoria: '.$cat['cat_nombre'];
            break;
          case 'marca':
            $todos = $this->productoModelo->getProductos(NULL,NULL,NULL,$_POST['filtro']);
            $mar = $this->marcaModelo->getMarca($_POST['filtro']);
            $filtro='Marca: '.$mar["mar_nombre"];
            break;
          default:
           $todos = $this->productoModelo->getProductos();
           break;
        }
        $this->vista->listado($todos,$filtro);
     }
     else{
        $todos = $this->productoModelo->getProductos();
        $this->vista->listado($todos);
     }
  }

  function unidad(){
    $imagenes = $this->productoModelo->getImagenes($_GET['id_producto']);
    $destacados = $this->productoModelo->getProductos("usado");
    $unidad = $this->productoModelo->getProducto($_GET['id_producto']);
    $caracteristicas = $this->productoModelo->getCaracteristicas($_GET['id_producto']);
    session_start();
    $usuario=NULL; 
    if(isset($_SESSION['user_name']))
      $usuario=$_SESSION['user_name'];
    $this->vista->unidad($unidad,$imagenes,$caracteristicas,$destacados,$usuario);
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
          $this->productoModelo->crearTarea($tarea,$imagenesVerificadas);
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
    $this->productoModelo->eliminarProducto($key);
    $productos = $this->productoModelo->getProductos();
    $this->vista->getLista($productos);
  }


  function filtro($tarea){
    return preg_match('/podria/',$tarea);
  }


}

 ?>
