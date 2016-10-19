<?php

class ProductosModel
{
  private $productos;
  private $db;

  function __construct()
  {
    $this->db = new PDO('mysql:host=localhost;dbname=maquinarias;charset=utf8', 'root', '');
  }

  function getProductos($tipo=NULL,$limit=NULL){
    $select='SELECT M.*, C.*, P.* FROM productos as P, marcas as M, categorías as C WHERE P.prod_marca=M.id_marca AND P.prod_categoria=C.id_categoria';
    if(!is_null($tipo))
      $select .= ' AND P.prod_estado = "' . $tipo . '"';
    if(!is_null($limit))
      $select .= ' LIMIT '.$limit;
      
    $sentencia = $this->db->prepare($select);
    $sentencia->execute();
    $productos = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    foreach($productos as $key => $producto){
      $imagenes=$this->getImagenes($producto['id_producto']);
      if($imagenes)
         {$productos[$key]['imagenes']=$imagenes;
          $productos[$key]['imagenes_des']=$imagenes[0]['img_url'];
         }
    }
    return $productos;
  }

  function agregarProducto($datos){
    $sentencia = $this->db->prepare("INSERT INTO productos(prod_categoria,prod_nombre,prod_descripcion,prod_marca,prod_modelo,prod_estado,prod_anio,prod_precio,prod_visible) VALUES(?,?,?,?,?,?,?,?,?)");
    $sentencia->execute(array($datos['prod_categoria'],$datos['prod_nombre'],$datos['prod_descripcion'],$datos['prod_marca'],$datos['prod_modelo'],$datos['prod_estado'],$datos['prod_anio'],$datos['prod_precio'],$datos['prod_visible']));
    return $id_producto = $this->db->lastInsertId();
  }

  function eliminarProducto($id_producto){
    $imagenes = $this->getImagenes($id_producto);
    if($imagenes)
      for($i=0;$i<count($imagenes);$i++){
         $this->eliminarImagen($imagenes[$i]['id_imagen']);
      }

    $sentencia = $this->db->prepare("delete from productos where id_producto=?");
    $sentencia->execute(array($id_producto));
    return $sentencia->rowCount();

  }

    function modificarProducto($id_producto,$datos){
      //var_dump($datos);
      $sentencia = $this->db->prepare('UPDATE productos SET prod_categoria=?, prod_nombre=?, prod_descripcion=?, prod_marca=?, prod_modelo=?, prod_estado=?, prod_anio=?, prod_precio=?, prod_visible=? WHERE id_producto=?');
      $sentencia->execute(array($datos['prod_categoria'],$datos['prod_nombre'],$datos['prod_descripcion'],$datos['prod_marca'],$datos['prod_modelo'],$datos['prod_estado'],$datos['prod_anio'],$datos['prod_precio'],$datos['prod_visible'],$id_producto));
      return $sentencia->fetch(PDO::FETCH_ASSOC);
    }

    function getProducto($id_producto){
      $sentencia = $this->db->prepare( "select * from productos where id_producto=?");
      $sentencia->execute(array($id_producto));
      $unidad = $sentencia->fetch(PDO::FETCH_ASSOC);
      $imagenes=$this->getImagenes($id_producto);
      $unidad['imagenes_des']='';
      if($imagenes)
         $unidad['imagenes_des']=$imagenes[0]['img_url'];
      return $unidad;
    }

     /* Funcionalidad para
        Categorias (ABM)
     */
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

     /*Caracteristicas*/
     function getCaracteristicas($id_producto){
       $sentencia = $this->db->prepare("select * from caracteristicas where id_producto=".$id_producto);
       $sentencia->execute();
       $caracteristicas = $sentencia->fetchAll(PDO::FETCH_ASSOC);
       return $caracteristicas;
     }

     function eliminarCaracteristica($id_caracteristica){
        $sentencia = $this->db->prepare("delete from caracteristicas where id_caracteristica=?");
        $sentencia->execute(array($id_caracteristica));
        return $sentencia->rowCount();
     }

     function crearCaracteristica($id_producto,$datos){
        $sentencia = $this->db->prepare('INSERT INTO caracteristicas (id_producto, car_nombre , car_detalle ) VALUES ( ?, ?, ? )');
        $sentencia->execute(array($id_producto,$datos['car_nombre'],$datos['car_detalle']));
        return $this->db->lastInsertId();
     }

     /*Imagenes*/
     function crearImagen($id_producto,$imagenes){
        foreach ($imagenes as $key => $imagen) {
           $path="images/".uniqid()."_".$imagen["name"];
           move_uploaded_file($imagen["tmp_name"], $path);
           $insertImagen = $this->db->prepare("INSERT INTO imágenes(img_producto,img_url) VALUES(?,?)");
           $insertImagen->execute(array($id_producto,$path));
           $id_imagen = $this->db->lastInsertId();
           $this->destacarImagen($id_imagen);
        }
    }

    function getImagenes($id_producto){
       $sentencia = $this->db->prepare( "SELECT * FROM imágenes WHERE img_producto=? ORDER BY img_destacada DESC ");
       $sentencia->execute(array($id_producto));
       return $sentencia->fetchAll(PDO::FETCH_ASSOC);
     }

     function getImagene($id_imagen){
        $sentencia = $this->db->prepare( "SELECT * FROM imágenes WHERE id_imagen=? ");
        $sentencia->execute(array($id_imagen));
        return $sentencia->fetchAll(PDO::FETCH_ASSOC);
      }

   function destacarImagen($id_producto,$id_imagen){
      $sentencia = $this->db->prepare('UPDATE imágenes SET img_destacada=0 WHERE img_producto=?');
      $sentencia->execute(array($id_producto));
      $sentencia->fetch(PDO::FETCH_ASSOC);

      $sentencia = $this->db->prepare('UPDATE imágenes SET img_destacada=1 WHERE id_imagen=?');
       $sentencia->execute(array($id_imagen));
      $sentencia->fetch(PDO::FETCH_ASSOC);

      }

    function eliminarImagen($id_imagen){
      $imagen = $this->getImagene($id_imagen);
      //var_dump($imagen);
      if($imagen[0]['img_url'])
         {unlink($imagen[0]['img_url']);}
      $sentencia = $this->db->prepare("delete from imágenes where id_imagen=?");
      $sentencia->execute(array($id_imagen));
      return $sentencia->rowCount();
    }
}

?>
