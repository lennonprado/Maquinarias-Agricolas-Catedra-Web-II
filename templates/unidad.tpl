<section>
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h4 >Detalles: {$unidad.prod_nombre}---</h4>
    </div>


    <div class="col-xs-12 col-md-8">
      <a data-toggle="lightbox" href="#">
        <img src="{$imgen_destacada.url}" class="img-responsive img-thumbnail" >
      </a>
    </div>


    {foreach from=$imagenes item=imagen}
    <div class="col-xs-4 col-md-4">
      <a data-toggle="lightbox" href="#">
        <img src="{$imagen.url}" class="img-responsive img-thumbnail">
      </a>
    </div>
    {/foreach}


    <div class="col-md-12">
      <article>
        <h4>Descripción</h4>
        {$prod_descripcion}
      </article>

      <h4>Caracteristicas</h4>
      <div class="table-responsive">
        <table width="100%" cellpadding="10" cellspacing="5" class="jsCaracteristicas table table-condensed">
          <thead>
            <tr>
              <th class="text-left">Caracteristica</th>
              <th class="text-right">Detalle</th>
            </tr>
             <tfoot>
               <tr>
                 <td align="left">
                 	<input type="text" id="nombreCaracteristica" placeholder="Caracteristica" tabindex="1" />
                 </td>
                 <td align="right">
                   <input type="text" id="descripcionCaracteristica" placeholder="Detalle" tabindex="2" />
                   <input type="button" class="btn-warning btn-xs" value="Agregar" id="nuevaCaracteristica" tabindex="3" />
                 </td>
               </tr>
             </tfoot>
          </thead>

          <tbody>
          {foreach from=$caracteristicas item=caracteristca}
            <tr>
               <td align="left">
                  <input type="text" id="nombreCaracteristica" placeholder="Caracteristica" tabindex="1" />
               </td>
               <td align="right">
                  <input type="text" id="descripcionCaracteristica" placeholder="Detalle" tabindex="2" />
                  <input type="button" class="btn-warning btn-xs" value="Agregar" id="nuevaCaracteristica" tabindex="3" />
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
         {foreach from=$usados item=usado}
           <li class="col-xs-12 col-md-3">
             <a href="#" title="{$usado.prod_nombre}" class="jsUnidad">
               <img src="{$usado.img_url}" class="img-responsive img-thumbnail" alt="{$usado.prod_nombre}" title="{$usado.prod_nombre}">
             </a>
             <h6><a href="#">{$usado.prod_nombre}</a></h6>
           </li>
        {/foreach}
      </ul>
    </div>
  </div>
</section>
<script src="files/js/servicio_rest.js" ></script>
