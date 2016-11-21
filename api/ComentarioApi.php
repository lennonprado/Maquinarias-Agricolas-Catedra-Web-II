<?php
require_once ('api.php');
require_once ('../models/ComentarioModel.php');
//require_once ('../controllers/AdminUsuarioController.php');

class ComentarioApi extends Api
{
  private $model;

  public function __construct($request)
 {
    //$usuarioController = new AdminUsuarioController();
    //$usuarioController->chekLogin();
    parent::__construct($request);
    $this->model = new ComentarioModel();

  }

  protected function comentario($argumentos){
    switch ($this->method) {
      case 'GET':
          //if($usuarioController->getUserLogin()){
            if((count($argumentos)>0) && ($argumentos[0])){
               $comentario = $this->model->getComentariosProducto($argumentos[0]);
               $error['Error'] = "No hay comentarios";
               return ($comentario) ? $comentario : $error;
            }else{
               $comentario = $this->model->getComentarios();
               $error['Error'] = "No hay comentarios";
               return ($comentario) ? $comentario : $error;
            }
      //   }
      //else {
      //   return $error['Error'] = "Error: Usuario No Logeado";
      //}
      break;

      case 'DELETE':
          if(count($argumentos)>0){
            $error['Error'] = "El comentario no existe";
            $success['Success'] = "El comentario se borro";
            $filasAfectadas = $this->model->eliminarComentarios($argumentos[0]);
            return ($filasAfectadas == 1) ? $success : $error;
          }
      break;

      case 'POST':
         if(count($argumentos)>0){
            $error['Error'] = "El comentario no se creo";
            $id_comentario = $this->model->agregarComentarios($_REQUEST);
            return ($id_comentario > 0) ? $this->model->getComentario($id_comentario) : $error;
         }
      break;

      default:
           return "Only accepts GET";
        break;
    }
   }



}


 ?>
