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
       $sentencia = $this->db->prepare("SELECT C.*, P.prod_nombre, U.user_name, DATE_FORMAT(C.com_alta,'%d/%m/%Y - %H:%i:%s') AS fecha FROM comentarios as C, productos as P, usuarios as U WHERE C.com_id_producto=P.id_producto AND C.com_id_usuario=U.id_usuario");
       $sentencia->execute();
       $comentarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $comentarios;
     }

     function agregarComentarios($datos){
       $sentencia = $this->db->prepare('INSERT INTO comentarios ( com_id_producto , com_id_usuario, com_mensaje, com_puntuacion ) VALUES ( ? , ?, ?, ? )');
       $sentencia->execute(array($datos['com_id_producto'],$datos['com_id_usuario'],$datos['com_mensaje'],$datos['com_puntuacion']));
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

     function getComentariosProducto($id_producto){
       $sentencia = $this->db->prepare( "SELECT C.*, U.user_name, DATE_FORMAT(C.com_alta,'%d/%m/%Y - %H:%i:%s') AS fecha FROM comentarios as C, usuarios as U WHERE C.com_id_usuario=U.id_usuario AND C.com_id_producto=?");
       $sentencia->execute(array($id_producto));
       return $sentencia->fetchAll(PDO::FETCH_ASSOC);
     }

     // elimino una comentario
     function eliminarComentarios($id_comentario){
       $sentencia = $this->db->prepare("DELETE FROM comentarios WHERE id_comentario=?");
       $sentencia->execute(array($id_comentario));
       return $sentencia->rowCount();
     }
}

?>
