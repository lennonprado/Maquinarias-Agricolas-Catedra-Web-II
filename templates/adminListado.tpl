
<section class="container">
  <div class="row">
    <h4>Listado de productos</h4>
    <div class="row destacados" >
      <p><button type="button" class="btn btn-success">Agregar nuevo producto</button></p>
         <div class="row">
         {foreach from=$productos item=item}
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="../{$item.imagenes_des}" alt="{$item.prod_nombre}" title="{$item.prod_nombre}" height="200" >
              <div class="caption">
                <h3>{$item.prod_nombre}</h3>
                <p>{$item.prod_nombre}</p>
                <p>
                  <a href="productos/modificar/{$item.id_producto}" class="btn btn-primary" role="button">Modificar</a>
                  <a href="productos/eliminar/{$item.id_producto}" class="btn btn-default" role="button">Eliminar</a>
                </p>
              </div>
            </div>
          </div>
        {/foreach}
      </div>
    </div>
  </div>
</section>
