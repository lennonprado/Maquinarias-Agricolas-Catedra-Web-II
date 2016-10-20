<?php

class MarcaModel
{
  private $marca;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=maquinarias;charset=utf8', 'root', '');
  }
     /* Marcas */
     function getMarcas(){
       $sentencia = $this->db->prepare("SELECT * FROM marcas");
       $sentencia->execute();
       $marcas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $marcas;
     }

     function agregarMarcas($mar_nombre,$mar_descripcion){
       $sentencia = $this->db->prepare('INSERT INTO marcas ( mar_nombre , mar_descripcion ) VALUES ( ? , ? )');
       $sentencia->execute(array($mar_nombre,$mar_descripcion));
       return $this->db->lastInsertId();
     }

     function modificarMarcas($id_marca,$mar_nombre,$mar_descripcion){
       $sentencia = $this->db->prepare( 'UPDATE marcas SET mar_nombre = ? , mar_descripcion = ? where id_marca=?');
       $sentencia->execute(array($mar_nombre,$mar_descripcion,$id_marca));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }

     function getMarca($id_marca){
       $sentencia = $this->db->prepare( "SELECT * FROM marcas WHERE id_marca=?");
       $sentencia->execute(array($id_marca));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     // elimino una marca
     function eliminarMarcas($id_marca){
       $sentencia = $this->db->prepare("DELETE FROM marcas WHERE id_marca=?");
       $sentencia->execute(array($id_marca));
       return $sentencia->rowCount();
     }
}

?>
