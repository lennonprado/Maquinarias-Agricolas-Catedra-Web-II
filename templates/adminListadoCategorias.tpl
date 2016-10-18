
<section class="container">
  <div class="row">
    <h4>Listado de Categorias</h4>
    <div class="row destacados" >
      <p><button type="button" class="btn btn-success">Agregar nueva Categoria</button></p>
      <ul class="list-group">
         {foreach from=$categorias item=item}
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="{$item.prod_nombre}" class="jsUnidad">{$item.cat_nombre}</a></h5>
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
