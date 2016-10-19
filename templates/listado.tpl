
  <section>
    <h3>Nuevos y Usados</h3>
    <div id="ListadoMaquinas">
      <ul>
         {foreach from=$todos item=unidad}
        <li>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <a href="#" title="{$unidad.prod_nombre}" class="jsUnidad" id_producto="{$unidad.id_producto}">
                <img src="{$unidad.imagenes_des}" alt="{$unidad.prod_nombre}" title="{$unidad.prod_nombre}" class="img-thumbnail img-responsive">
              </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
              <h3>
                <a id_producto="{$unidad.id_producto}" href="#" title="{$unidad.prod_nombre}" class="jsUnidad">{$unidad.prod_nombre}</a>
              </h3>
              <ul class="features">
                  <li><span>Marca</span> : {$unidad.mar_nombre}</li>
                  <li><span>Modelo</span> : {$unidad.prod_modelo}</li>
                  <li><span>Estado</span> : {$unidad.prod_estado}</li>
                  <li><span>Año</span> : {$unidad.prod_anio}</li>
              </ul> 
              <ul class="price">
                  <li><span>Precio</span> $  {$unidad.prod_precio}</li>
              </ul>
              <a id_producto="{$unidad.id_producto}" href="#" class="btn btn-warning jsUnidad">Detalles Ver</a>
            </div>
          </div>
        </li>
        {/foreach}
      </ul>
    </div>
  </section>

<nav>
  <ul class="pagination">
    <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">«</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li>
    <li><a href="#">2</a></li>
    <li><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>
  </ul>
</nav>
