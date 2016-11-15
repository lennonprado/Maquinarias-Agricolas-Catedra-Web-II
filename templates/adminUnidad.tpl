<section class="container">

   <div id="alert" class="alert alert-{$tipoMensaje}" {if !isset($mensaje)} style="display:none" {/if} role="alert">{if isset($mensaje)} {$mensaje} {/if}</div>

   <div class="row">
      <div class="col-md-6">
         <h2>Producto</h2>
         <form action="/maquinarias/admin/productos/modificar/{$unidad.id_producto}" method="post">
           <div class="form-group">
             <label for="prod_nombre">Categoria</label>
             <select class="form-control" name="prod_categoria" id="prod_categoria" >
               {foreach from=$categorias item=categoria}
                 <option value="{$categoria.id_categoria}" {if $categoria.id_categoria==$unidad.prod_categoria}selected{/if} >{$categoria.cat_nombre}</option>
               {/foreach}
             </select>
           </div>

           <div class="form-group" >
             <label for="prod_nombre">Marca</label>
             <select class="form-control" name="prod_marca" id="prod_marca">
               {foreach from=$marcas item=marca}
                 <option value="{$marca.id_marca}" {if $marca.id_marca==$unidad.prod_marca}selected{/if} >{$marca.mar_nombre}</option>
               {/foreach}
             </select>
           </div>

           <div class="form-group">
             <label for="Nombre">Nombre</label>
             <input type="text" name="prod_nombre" class="form-control" id="prod_nombre" placeholder="Nombre del producto" value="{$unidad.prod_nombre}" required/>
           </div>

           <div class="form-group">
             <label for="Descripcion">Descripcion</label>
             <textarea class="form-control" name="prod_descripcion" id="prod_descripcion" rows="3">{$unidad.prod_descripcion}</textarea>
           </div>

           <div class="form-group">
             <label for="Modelo">Modelo</label>
             <input type="text" class="form-control" id="prod_modelo" name="prod_modelo" placeholder="Modelo del producto" value="{$unidad.prod_modelo}" />
           </div>

           <div class="form-group">
             <label for="Año">Año</label>
             <input type="text" class="form-control" id="prod_anio" name="prod_anio" placeholder="Modelo del producto" value="{$unidad.prod_anio}" />
           </div>

           <div class="form-group">
             <label for="Estado">Estado</label>
             <select class="form-control" id="prod_estado" name="prod_estado" required>
               <option value="nuevo" {if $unidad.prod_estado=="nuevo"} selected {/if} >Nuevo</option>
               <option value="usado" {if $unidad.prod_estado=="usado"} selected {/if} >Usado</option>
             </select>
           </div>

           <div class="form-group">
             <label for="Precio">Precio</label>
             <input type="text" class="form-control" id="prod_precio" name="prod_precio" placeholder="Modelo del producto" value="{$unidad.prod_precio}" />
           </div>

           <div class="form-group">
             <label for="Visible">Visible</label>
             <select class="form-control" id="prod_visible" name="prod_visible">
               <option value="1" {if $unidad.prod_visible==1} selected {/if} >Si</option>
               <option value="0" {if $unidad.prod_visible==0} selected {/if} >No</option>
             </select>
           </div>

           <input type="submit" value="Modificar" name="modificarProducto" class="btn btn-default" />

         </form>
      </div>
      <div class="col-md-6">
         <h2>Imagenes</h2>
         <form action="/maquinarias/admin/productos/modificar/{$unidad.id_producto}" method="post" class="form-inline" enctype="multipart/form-data">

            <div class="form-group">
             <label for="exampleInputFile">Subir Imagen</label>
             <input type="file" name="imagenes[]" required value="" multiple>
             <p class="help-block">Imagenes permitidas, JPG, PNG, GIF</p>
           </div>
            <input type="submit" value="Cargar" name="crearImagen" class="btn btn-default" />

         </form>
            <br />
            {if $imagenes}
            <div class="row">
               <form action="/maquinarias/admin/productos/modificar/{$unidad.id_producto}" method="post" class="form-inline" >
               {foreach from=$imagenes item=imagen}
               <div class="col-md-3 form-horizontal">
                  <img src="/maquinarias/{$imagen.img_url}" width="140" height="100" class="img-rounded" />
                  <label>Eliminar:</label><input type="checkbox" value="{$imagen.id_imagen}" name="idsImagenEliminar[]" />
                  <input type="button" id="{$imagen.id_imagen}" idPro="{$unidad.id_producto}" value="Destacar" name="DestacarImagen" class="btn btn-success btn-xs jsDestacarImg" {if $imagen.img_destacada} style="display:none" {/if}  />
               </div>
               {/foreach}
               <div class="col-md-12"><br />
                  <input type="submit" value="Eliminar Imagen/s" name="eliminarImagen" class="btn btn-danger btn-xs" />
               </div>
               </form>
            </div>

            {else}
               <h4>Sin imagenes</h4>
            {/if}



         <form action="/maquinarias/admin/productos/modificar/{$unidad.id_producto}" method="post" class="form-inline">
            <h2>Caracteristicas</h2>

            <div class="form-group">
              <label for="Precio">Nombre</label>
              <input type="text" class="form-control" id="car_nombre" name="car_nombre" placeholder="Nombre de la caracteristica" value="" />
            </div>

            <div class="form-group">
              <label for="Precio">Detalle</label>
              <input type="text" class="form-control" id="car_detalle" name="car_detalle" placeholder="Detalle de la caracteristica" value="" />
            </div>

            <input type="submit" value="Crear" name="crearCaracteristica" class="btn btn-default" />
         </form>

            <br />
            {if $caracteristicas}
            <div class="row">
            {foreach from=$caracteristicas item=caracteristica}
            <div class="col-md-4">
               Nombre: {$caracteristica.car_nombre}<br />
               Detalle: {$caracteristica.car_detalle}
               <form action="/maquinarias/admin/productos/modificar/{$unidad.id_producto}" method="post" class="form-inline" >
                  <input type="hidden" value="{$caracteristica.id_caracteristica}" name="id_eliminar_caracteristica" id="id_eliminar_caracteristica" />
                  <input type="submit" value="Eliminar Caracteristica" name="eliminarCaracteristica" class="btn btn-danger btn-xs" />
               </form>
            </div>
            {/foreach}
            </div>
            {else}
               <h4>Sin caracteristicas</h4>
            {/if}
      </div>
   </div>
</section>
