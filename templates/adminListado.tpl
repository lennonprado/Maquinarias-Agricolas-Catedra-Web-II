
<section>
  <div class="row">
    <h4>Listado de productos</h4>
    <div class="row destacados" >
      <p><button type="button" class="btn btn-success">Agregar nuevo producto</button></p>
      <ul>
         {foreach from=$nuevos item=nuevo}
        <li class="col-xs-12 col-md-4">
          <a href="#" title="{$nuevo.prod_nombre}" class="thumbnail jsUnidad">
            <img class="img-responsive" src="{$nuevo.url_img}" alt="{$nuevo.prod_nombre}" title="{$nuevo.prod_nombre}">
          </a>
          <h5><a href="#" title="{$nuevo.prod_nombre}" class="jsUnidad">{$nuevo.prod_nombre}</a></h5>
          <p>
            <button type="button" class="btn btn-modificar">Modificar</button>
            <button type="button" class="btn btn-eliminar">Eliminar</button>
          </p>
        </li>
        {/foreach}
      </ul>
    </div>
  </div>
</section>
