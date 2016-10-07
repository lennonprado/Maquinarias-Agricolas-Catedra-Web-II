<?php

class ProductosModel
{
  private $productos;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=maquinarias;charset=utf8', 'root', '');
  }

 function getImagenes($id_producto){
    $sentencia = $this->db->prepare( "select * from imagen where id_producto=?");
    $sentencia->execute(array($id_producto));
    return $sentencia->fetchAll(PDO::FETCH_ASSOC);
  }

  function getProducto(){
    $sentencia = $this->db->prepare( "select * from productos");
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach ($productos as $key => $producto) {
        $productos[$key]['imagenes']=$this->getImagenes($producto['id_producto']);
    }
    return $productos;
  }

  function crearproducto($producto, $imagenes){
    //Agrega en la ultima posicion del arreglo
    $sentencia = $this->db->prepare("INSERT INTO producto(nombre) VALUES(?)");
    $sentencia->execute(array($producto));
    $id_producto = $this->db->lastInsertId();

    //Copiarla del lugar temporal al definitivo.
    foreach ($imagenes as $key => $imagen) {
      $path="images/".uniqid()."_".$imagen["name"];
      move_uploaded_file($imagen["tmp_name"], $path);
      $insertImagen = $this->db->prepare("INSERT INTO imagen(path,fk_id_producto) VALUES(?,?)");
      $insertImagen->execute(array($path,$id_producto));
    }
    return $id_producto;
    //$this->productos[] = $producto;
  }

  function eliminarproducto($id_producto){
    //Elimina la '$id_producto' del arreglo
    //productos[0] = 'producto 11'
    //productos[1] = 'producto 21'
    //productos[2] = 'producto 11'
    //unset($this->productos[$id_producto]);
    $sentencia = $this->db->prepare("delete from producto where id_producto=?");
    $sentencia->execute(array($id_producto));
    return $sentencia->rowCount();

  }

    function toogleproducto($id_producto){
      $producto = $this->getproducto($id_producto);
      $sentencia = $this->db->prepare("update producto set finalizada=? where id_producto=?");
      $sentencia->execute(array(!$producto['finalizada'],$id_producto));
    }

    function getproducto($id_producto){
      $sentencia = $this->db->prepare( "select * from producto where id_producto=?");
      $sentencia->execute(array($id_producto));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

 function getCategoria(){
   $sentencia = $this->db->prepare( "select * from categoria");
   $sentencia->execute();
   $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
   return $categorias;
 }

}

?>
