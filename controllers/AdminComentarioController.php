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
    if(isset($_POST['com_id_producto'])){
      // guardo en el cometario
      $resultado = $this->modelo->agregarComentarios($_POST);
      if($resultado > 0) header('Location: http://localhost/maquinarias/admin/comentarios/');
    }
    else{
      // muestro el formulario
      $this->vista->agregarComentarios();
    }
  }

  // Elimino una categoria y redirecciono al inicio de categorias
  function eliminarComentarios(){
    $this->modelo->eliminarComentarios($_GET["id"]);
    $this->vista->mostrarMensaje("Comentario Eliminado correctamente!", "success");
    $this->Comentarios();
  }

}

 ?>
