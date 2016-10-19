
<section class="container">
  <div class="row">
    <h4>Listado de Categorias</h4>
    <div class="row destacados" >
      <p><a  href="categorias/agregar" class="btn btn-success">Agregar nueva Categoria</a></p>
      <ul class="list-group">
         {foreach from=$categorias item=item}
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="{$item.prod_nombre}" class="jsUnidad">{$item.cat_nombre}</a></h5>
          <p>
            <a href="categorias/modificar/{$item.id_categoria}" class="btn">Modificar</a>
            <a href="categorias/eliminar/{$item.id_categoria}" class="btn">Eliminar</a>
          </p>
        </li>
        {/foreach}
      </ul>
    </div>
  </div>
</section>
