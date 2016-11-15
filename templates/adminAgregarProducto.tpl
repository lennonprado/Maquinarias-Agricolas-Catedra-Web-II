<section class="container">
   {if isset($mensaje)}
      <div id="alert" class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}

   <div class="row">
      <div class="col-md-6">
         <h2>Producto</h2>
         <form action="/maquinarias/admin/productos/agregar" method="post">
           <div class="form-group">
             <label for="prod_nombre">Categoria</label>
             <select class="form-control" name="prod_categoria" id="prod_categoria" >
               {foreach from=$categorias item=categoria}
                 <option value="{$categoria.id_categoria}" >{$categoria.cat_nombre}</option>
               {/foreach}
             </select>
           </div>

           <div class="form-group" >
             <label for="prod_nombre">Marca</label>
             <select class="form-control" name="prod_marca" id="prod_marca">
               {foreach from=$marcas item=marca}
                 <option value="{$marca.id_marca}" >{$marca.mar_nombre}</option>
               {/foreach}
             </select>
           </div>

           <div class="form-group">
             <label for="Nombre">Nombre</label>
             <input type="text" name="prod_nombre" class="form-control" id="prod_nombre" placeholder="Nombre del producto" value="" required/>
           </div>

           <div class="form-group">
             <label for="Descripcion">Descripcion</label>
             <textarea class="form-control" name="prod_descripcion" id="prod_descripcion" rows="3"></textarea>
           </div>

           <div class="form-group">
             <label for="Modelo">Modelo</label>
             <input type="text" class="form-control" id="prod_modelo" name="prod_modelo" placeholder="Modelo del producto" value="" />
           </div>

           <div class="form-group">
             <label for="Año">Año</label>
             <input type="number" class="form-control" id="prod_anio" name="prod_anio" placeholder="Año del producto" value=""  />
           </div>

           <div class="form-group">
             <label for="Estado" >Estado</label>
             <select class="form-control" id="prod_estado" name="prod_estado" required>
               <option value="nuevo">Nuevo</option>
               <option value="usado">Usado</option>
             </select>
           </div>

           <div class="form-group">
             <label for="Precio">Precio</label>
             <input type="number" class="form-control" id="prod_precio" name="prod_precio" placeholder="Precio del producto" value="" step="any" />
           </div>

           <div class="form-group">
             <label for="Visible">Visible</label>
             <select class="form-control" id="prod_visible" name="prod_visible">
               <option value="1">Si</option>
               <option value="0">No</option>
             </select>
           </div>

           <input type="submit" value="Agregar" name="agregarProducto" class="btn btn-default" />
         </form>
      </div>
      <div class="col-md-6">
      </div>
   </div>
</section>
