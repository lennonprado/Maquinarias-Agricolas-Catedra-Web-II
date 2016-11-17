<section>
   <div class="row">
      <div class="col-xs-12 col-md-12">
         <h4>Detalles: {$unidad.prod_nombre}</h4>
      </div>

      {foreach from=$imagenes item=imagen}
      {if $imagen.img_destacada==0}
      <div class="col-xs-4 col-md-4">
         <a data-toggle="lightbox" href="#">
            <img src="{$imagen.img_url}" class="img-responsive img-thumbnail" width="300" height="200">
         </a>
      </div>
      {else}
      <div class="col-xs-12 col-md-8">
         <a data-toggle="lightbox" href="#">
            <img src="{$imagen.img_url}" class="img-responsive img-thumbnail" width="800" height="600" >
         </a>
      </div>
      {/if}
      {/foreach}

      <div class="col-md-12">
         <div class="col-md-6">
            <h4>Descripción</h4>
            {if $unidad.prod_descripcion}
            {$unidad.prod_descripcion}
            {else}
               Sin descripcion
            {/if}
         </div>
         <div class="col-md-6">
            <h4>Caracteristicas</h4>
            <div class="table-responsive">
            <table width="100%" cellpadding="10" cellspacing="5" class="jsCaracteristicas table table-condensed">
               <thead>
                  <tr>
                     <th class="text-left">Caracteristica</th>
                     <th class="text-right">Detalle</th>
                  </tr>
               </thead>

               <tbody>
                  {foreach from=$caracteristicas item=caracteristca}
                  <tr>
                     <td align="left">
                        {$caracteristca.car_nombre}
                     </td>
                     <td align="right">
                        {$caracteristca.car_detalle}
                     </td>
                  </tr>
                  {/foreach}
               </tbody>

            </table>
         </div>
         </div>
      </div>

      <div class="col-md-12">
         <h4>Comentarios</h4>
         {if $usuario}
         <form class="form-horizontal" >
            <div class="form-group">
               <label class="control-label col-xs-3">Cometario:</label>
               <div class="col-xs-9">
                  <textarea id="com_mensaje" name="com_mensaje"></textarea>
                  <input type="hidden" value="{$usuario}" name="com_id_usuario" />
                  <input type="hidden" value="{$unidad.id_producto}" name="com_id_producto" />
               </div>
            </div>
            <div class="form-group">
               <label class="control-label col-xs-3">Puntuacion:</label>
               <div class="col-xs-9">
                  <input type="radio" name="com_puntuacion" value="1" checked>1
                  <input type="radio" name="com_puntuacion" value="2" checked>2
                  <input type="radio" name="com_puntuacion" value="3" checked>3
                  <input type="radio" name="com_puntuacion" value="4" checked>4
                  <input type="radio" name="com_puntuacion" value="5" checked>5
               </div>
            </div>
            <div class="form-group">
               <div class="col-xs-offset-3 col-xs-9">
                  <input type="button" class="btn btn-primary" value="Comentar">
               </div>
            </div>
         </form>
         {else}
            <div class="alert alert-warning">Debes <a href="#" class="jsIngresar" idPro="{$unidad.id_producto}">Ingresar y/o registrarte</a> para dejar un comentario</div>
         {/if}
      </div>
   </div>
</section>

<section>
   <div class="row">
      <h4>Usados Seleccionados</h4>
      <div class="row destacados">
         <ul>
            {foreach from=$destacados item=destacado}
            <li class="col-xs-12 col-md-3">
               <a href="#" title="{$destacado.prod_nombre}" class="jsUnidad" id_producto="{$destacado.id_producto}">
                  <img src="{$destacado.imagenes_des}" class="img-responsive img-thumbnail" alt="{$destacado.prod_nombre}" title="{$destacado.prod_nombre}">
               </a>
               <h6><a href="#" class="jsUnidad" id_producto="{$destacado.id_producto}">{$destacado.prod_nombre}</a></h6>
            </li>
            {/foreach}
         </ul>
      </div>
   </div>
</section>
<script src="js/comentarios_rest.js" ></script>
