
<section class="container">
  <div class="row">
    <h4>Listado de Marcas</h4>
    <div class="row destacados" >
      <p><a  href="http://localhost/maquinarias/admin/marcas/agregar" class="btn btn-success">Agregar nueva marca</a></p>
      <ul class="list-group">
         {if $marcas}
         {foreach from=$marcas item=item}
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="{$item.mar_nombre}" class="jsUnidad">{$item.mar_nombre}</a></h5>
          <p><i>{$item.mar_descripcion}</i></p>
          <p>
            <a role="button" href="http://localhost/maquinarias/admin/marcas/modificar/{$item.id_marca}" class="btn btn-primary">Modificar</a>
            <a role="button" href="http://localhost/maquinarias/admin/marcas/borrar/{$item.id_marca}" class="btn btn-danger">Eliminar</a>
          </p>
        </li>
        {/foreach}
        {else}
          <div id="alert" class="alert alert-danger" role="alert" >Sin Marcas</div>
       {/if}
      </ul>
    </div>
  </div>
</section>
