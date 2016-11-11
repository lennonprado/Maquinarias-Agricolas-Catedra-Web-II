<?php

class UsuarioModel
{
  private $usuario;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=maquinarias;charset=utf8', 'root', '');
  }
     /* Usuarios */
     function getUsuarios(){
       $sentencia = $this->db->prepare("SELECT * FROM usuarios");
       $sentencia->execute();
       $usuarios = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $usuarios;
     }

     function agregarUsuarios($mar_nombre,$mar_descripcion){
       $sentencia = $this->db->prepare('INSERT INTO usuarios ( mar_nombre , mar_descripcion ) VALUES ( ? , ? )');
       $sentencia->execute(array($mar_nombre,$mar_descripcion));
       return $this->db->lastInsertId();
     }

     function modificarUsuarios($id_usuario,$mar_nombre,$mar_descripcion){
       $sentencia = $this->db->prepare( 'UPDATE usuarios SET mar_nombre = ? , mar_descripcion = ? where id_usuario=?');
       $sentencia->execute(array($mar_nombre,$mar_descripcion,$id_usuario));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }

     function getUsuario($id_usuario){
       $sentencia = $this->db->prepare( "SELECT * FROM usuarios WHERE id_usuario=?");
       $sentencia->execute(array($id_usuario));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     // elimino una usuario
     function eliminarUsuarios($id_usuario){
       $sentencia = $this->db->prepare("DELETE FROM usuarios WHERE id_usuario=?");
       $sentencia->execute(array($id_usuario));
       return $sentencia->rowCount();
     }
}

?>
