<?php
require_once('view/AdminComentarioView.php');
require_once('models/ComentarioModel.php');

class AdminComentarioController
{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->modelo = new ComentarioModel();
    $this->vista = new AdminComentarioView();
  }

  // Listado de Comentarios
  function Comentarios(){
    $comentarios = $this->modelo->getComentarios();
    $this->vista->comentarios($comentarios);
  }

  // Muestro el listado de agrego una categoria
  function agregarComentarios(){
    if((isset($_POST['mar_nombre']))&&(isset($_POST['mar_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->agregarComentarios($_POST['mar_nombre'],$_POST['mar_descripcion']);
      if($resultado > 0) header('Location: http://localhost/maquinarias/admin/comentarios/');
    }
    else{
      // muestro el formulario
      $this->vista->agregarComentarios();
    }
  }

  // modifico una categoria que viene por get
  function modificarComentarios(){
    if((isset($_POST['mar_nombre']))&&(isset($_POST['mar_descripcion']))){
      // guardo en el modelo
      $resultado = $this->modelo->modificarComentarios($_GET["id"],$_POST['mar_nombre'],$_POST['mar_descripcion']);
      header('Location: http://localhost/maquinarias/admin/comentarios/');
    }
    else{
      // muestro el formulario
      $comentario = $this->modelo->getComentario($_GET["id"]);
      $this->vista->modificarComentarios($comentario);
    }
  }

  // Elimino una categoria y redirecciono al inicio de categorias
  function eliminarComentarios(){
    $this->modelo->eliminarComentarios($_GET["id"]);
    header('Location: http://localhost/maquinarias/admin/comentarios/');
  }

}

 ?>
