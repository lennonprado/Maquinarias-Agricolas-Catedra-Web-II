<?php

class CategoriaModel
{
  private $categoria;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=maquinarias;charset=utf8', 'root', '');
  }

     function getCategorias(){
       $sentencia = $this->db->prepare( "SELECT * FROM categorías");
       $sentencia->execute();
       $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $categorias;
     }
     function getCategoria($id_categoria){
       $sentencia = $this->db->prepare( "SELECT * FROM categorías WHERE id_categoria=?" );
       $sentencia->execute(array($id_categoria));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     function agregarCategoria($cat_nombre,$cat_descripcion){
       $sentencia = $this->db->prepare('INSERT INTO categorías ( cat_nombre , cat_descripcion ) VALUES ( ? , ? )');
       $sentencia->execute(array($cat_nombre,$cat_descripcion));
       return $this->db->lastInsertId();
     }
     function modificarCategoria($id_categoria,$cat_nombre,$cat_descripcion){
       $sentencia = $this->db->prepare( 'UPDATE categorías SET cat_nombre = ? , cat_descripcion = ? WHERE id_categoria=?');
       $sentencia->execute(array($cat_nombre,$cat_descripcion,$id_categoria));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     function eliminarCategoria($id_categoria){
       $sentencia = $this->db->prepare( "DELETE FROM categorías WHERE id_categoria=?" );
       $sentencia->execute(array($id_categoria));
       return $sentencia->rowCount();
     }
}

?>
