<?php

class ComentarioModel
{
  private $comentario;
  private $db;

  function __construct()
  { 
    $this->db = new PDO('mysql:host=localhost;dbname=maquinarias;charset=utf8', 'root', '');
  }
     /* Comentarios */
     function getComentarios(){
       $sentencia = $this->db->prepare("SELECT * FROM comentarios");
       $sentencia->execute();
       $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $comentarios;
     }

     function agregarComentarios($mar_nombre,$mar_descripcion){
       $sentencia = $this->db->prepare('INSERT INTO comentarios ( mar_nombre , mar_descripcion ) VALUES ( ? , ? )');
       $sentencia->execute(array($mar_nombre,$mar_descripcion));
       return $this->db->lastInsertId();
     }

     function modificarComentarios($id_comentario,$mar_nombre,$mar_descripcion){
       $sentencia = $this->db->prepare( 'UPDATE comentarios SET mar_nombre = ? , mar_descripcion = ? where id_comentario=?');
       $sentencia->execute(array($mar_nombre,$mar_descripcion,$id_comentario));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }

     function getComentario($id_comentario){
       $sentencia = $this->db->prepare( "SELECT * FROM comentarios WHERE id_comentario=?");
       $sentencia->execute(array($id_comentario));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     // elimino una comentario
     function eliminarComentarios($id_comentario){
       $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
       $sentencia->execute(array($id_comentario));
       return $sentencia->rowCount();
     }
}

?>
