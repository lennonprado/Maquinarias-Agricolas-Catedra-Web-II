<?php

class ProductosModel
{
  private $productos;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=maquinarias;charset=utf8', 'root', '');
  }

  function getProductos($tipo=NULL){
    if(!is_null($tipo))
      $sentencia = $this->db->prepare('SELECT M.*, C.*, P.* FROM productos as P, marcas as M, categorías as C WHERE P.prod_marca=M.id_marca AND P.prod_categoria=C.id_categoria AND P.prod_estado = "' . $tipo . '"');
    else
      $sentencia = $this->db->prepare("SELECT M.*, C.*, P.* FROM productos as P, marcas as M, categorías as C WHERE P.prod_marca=M.id_marca AND P.prod_categoria=C.id_categoria");

    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach($productos as $key => $producto){
      $imagenes=$this->getImagenes($producto['id_producto']);
      $productos[$key]['imagenes']=$imagenes;
      $productos[$key]['imagenes_des']=$imagenes[0]['img_url'];
    }
    return $productos;
  }

  function crearProducto($producto, $imagenes){
    //Agrega en la ultima posicion del arreglo
    $sentencia = $this->db->prepare("INSERT INTO productos(nombre) VALUES(?)");
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
  }

  function eliminarProducto($id_producto){
    $sentencia = $this->db->prepare("delete from productos where id_producto=?");
    $sentencia->execute(array($id_producto));
    return $sentencia->rowCount();

  }

    function toogleProducto($id_producto){
      $producto = $this->getproducto($id_producto);
      $sentencia = $this->db->prepare("update productos set finalizada=? where id_producto=");
      $sentencia->execute(array(!$producto['finalizada'],$id_producto));
    }

    function getProducto($id_producto){
      $sentencia = $this->db->prepare( "select * from productos where id_producto=?");
      $sentencia->execute(array($id_producto));
      $unidad = $sentencia->fetch(PDO::FETCH_ASSOC);
      $imagenes=$this->getImagenes($id_producto);
      $unidad['imagenes_des']=$imagenes[0]['img_url'];

      return $unidad;
    }

    function getImagenes($id_producto){
       $sentencia = $this->db->prepare( "SELECT * FROM imágenes WHERE img_producto=".$id_producto." ORDER BY img_destacada DESC ");
       $sentencia->execute(array($id_producto));
       return $sentencia->fetchAll(PDO::FETCH_ASSOC);
     }

     /* Funcionalidad para
        Categorias (ABM)
     */
     function getCategorias(){
       $sentencia = $this->db->prepare( "SELECT * FROM categorias");
       $sentencia->execute();
       $categorias = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $categorias;
     }
     function getCategoria($id_categoria){
       $sentencia = $this->db->prepare( "SELECT * FROM categorias WHERE id_categoria=?" );
       $sentencia->execute(array($id_categoria));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     function agregarCategoria($cat_nombre,$cat_descripcion){
       $sentencia = $this->db->prepare('INSERT INTO categorias ( cat_nombre , cat_descripcion ) VALUES ( ? , ? )');
       $sentencia->execute(array($cat_nombre,$cat_descripcion));
       return $this->db->lastInsertId();
     }
     function modificarCategoria($id_categoria,$cat_nombre,$cat_descripcion){
       $sentencia = $this->db->prepare( 'UPDATE categorias SET cat_nombre = ? , cat_descripcion = ? WHERE id_categoria=?');
       $sentencia->execute(array($cat_nombre,$cat_descripcion,$id_categoria));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     function eliminarCategoria($id_categoria){
       $sentencia = $this->db->prepare( "DELETE FROM categorias WHERE id_categoria=?" );
       $sentencia->execute(array($id_categoria));
       return $sentencia->rowCount();
     }

     /* Marcas */
     function getMarcas(){
       $sentencia = $this->db->prepare("select * from marcas");
       $sentencia->execute();
       $marcas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $marcas;
     }

     function modificarMarca($id_marca,$mar_nombre,$mar_descripcion){
       $sentencia = $this->db->prepare( 'UPDATE marcas SET mar_nombre = "?",mar_descripcion="?" where id_marca=?');
       $sentencia->execute(array($mar_nombre,$mar_descripcion,$id_marca));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }

     function getMarca($id_marca){
       $sentencia = $this->db->prepare( "select * from marcas where id_marca=?");
       $sentencia->execute(array($id_marca));
       return $sentencia->fetch(PDO::FETCH_ASSOC);
     }
     // elimino una marca
     function eliminarMarca($id_marca){
       $sentencia = $this->db->prepare("delete from marcas where id_marca=?");
       $sentencia->execute(array($id_marca));
       return $sentencia->rowCount();
     }

     /*Caracteristicas*/
     function getCaracteristicas($id_producto){
       $sentencia = $this->db->prepare("select * from caracteristicas where id_producto=".$id_producto);
       $sentencia->execute();
       $caracteristicas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $caracteristicas;
     }

}

?>
