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

     function agregarUsuarios($user_name,$user_pass,$user_permisos){
       $sentencia = $this->db->prepare('INSERT INTO usuarios ( user_name , user_pass, user_permisos ) VALUES ( ? , ?, ? )');
       $sentencia->execute(array($user_name,$user_pass,$user_permisos));
       return $this->db->lastInsertId();
     }

     function modificarUsuarios($id_usuario,$user_name,$user_permisos){
       $sentencia = $this->db->prepare( 'UPDATE usuarios SET user_name = ? , user_permisos = ? where id_usuario=?');
       $sentencia->execute(array($user_name,$user_permisos,$id_usuario));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }

     function getUsuario($id_usuario=NULL,$user_name=NULL){
       $select="SELECT * FROM usuarios WHERE 1";
       $variables=array();

       if(!is_null($id_usuario)){
         $select.=" AND id_usuario=?";
         array_push($variables, $id_usuario);
       }

       if(!is_null($user_name)){
         $select.=" AND user_name=?";
         array_push($variables, $user_name);
       }

       $sentencia = $this->db->prepare($select);
       $sentencia->execute($variables);
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
