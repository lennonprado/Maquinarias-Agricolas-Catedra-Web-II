
<section class="container">
  <div class="row">
    <h4>Listado de Marcas</h4>
    <div class="row destacados" >
      <p><button type="button" class="btn btn-success">Agregar nueva Marca</button></p>
      <ul class="list-group">
         {foreach from=$marcas item=item}
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="{$item.prod_nombre}" class="jsUnidad">{$item.marca_nombre}</a></h5>
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
