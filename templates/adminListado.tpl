
<section class="container">
   {if isset($mensaje)}
      <div id="alert" class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}
  <div class="row">
    <h4>Listado de productos</h4>
    <div class="row destacados" >
      <p>
          <a href="/maquinarias/admin/productos/agregar" class="btn btn-success" role="button">Agregar nuevo producto</a>
      </p>
         <div class="row">
         {foreach from=$productos item=item}
          <div class="col-md-3">
            <div class="unidad">
              <img src="/maquinarias/{$item.imagenes_des}" alt="{$item.prod_nombre}" title="{$item.prod_nombre}" class="img-rounded" width="204" height="136" >
              <div class="caption">
                <h4>{$item.prod_nombre|truncate:24:"...":true}</h4>
                <p>Categoria: {$item.cat_nombre}</p>
                <p>Marca: {$item.mar_nombre}</p>
                <p>
                  <a href="/maquinarias/admin/productos/modificar/{$item.id_producto}" class="btn btn-primary" role="button">Modificar</a>
                  <a href="/maquinarias/admin/productos/borrar/{$item.id_producto}" class="btn btn-danger" role="button">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        {/foreach}
      </div>
    </div>
  </div>
</section>
