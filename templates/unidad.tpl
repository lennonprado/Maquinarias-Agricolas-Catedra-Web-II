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
      <article>
        <h4>Descripción</h4>
        {$unidad.prod_descripcion}
      </article>

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
