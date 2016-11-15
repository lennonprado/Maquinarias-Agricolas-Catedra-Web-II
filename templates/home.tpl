<header>
  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/front_don_francisco.jpg" />
    </div>
    <div class="item">
      <img src="images/front_don_francisco1.jpg"  />
    </div>
    <div class="item">
      <img src="images/front_don_francisco2.jpg" />
    </div>
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</header>


<section>
  <div class="row">
    <h4>Nuevas Maquinarias</h4>
    <div class="row destacados" >
      <ul>
         {foreach from=$nuevos item=nuevo}
        <li class="col-xs-12 col-md-4">
          <a href="#" title="{$nuevo.prod_nombre}" class="thumbnail jsUnidad" id_producto="{$nuevo.id_producto}">
            <img class="img-responsive" src="{$nuevo.imagenes_des}" alt="{$nuevo.prod_nombre}" title="{$nuevo.prod_nombre}">
          </a>
          <h5><a href="#" title="{$nuevo.prod_nombre}" class="jsUnidad" id_producto="{$nuevo.id_producto}" >{$nuevo.prod_nombre}</a></h5>
        </li>
        {/foreach}
      </ul>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <div class="col-sm-4 col-md-8">
      <h4>Maquinarias</h4>
      <div class="col-sm-6 col-md-6  browser-cat">
        <h5>Categoria</h5>
        <ul>
           {foreach from=$categorias item=item}
            <li><a href="#" class="jsFiltrar" tipo="categoria" filtro="{$item.id_categoria}">{$item.cat_nombre}</a></li>
          {/foreach}
        </ul>
      </div>
      <div class="col-sm-6 col-md-6  browser-cat">
        <h5>Marcas</h5>
        <ul >
           {foreach from=$marcas item=item}
            <li><a href="#" class="jsFiltrar" tipo="marca" filtro="{$item.id_marca}">{$item.mar_nombre}</a></li>
          {/foreach}
        </ul>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <h4>busqueda</h4>
      <div id="homeSearch">
        <form action="#" method="get">
          <div>
            <label for="marca">Año</label>
            <input name="marca" id="anio" type="number">
          </div>
          <div>
            <label for="make_modelsub">Modelo</label>
            <input name="modelo" id="modelo" type="text" />
          </div>
          <div>
            <input type="button" id="homeSearchButton" name="homeSearchButton" value="Buscar" class="jsFiltrar" >
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="row">
    <h4>destacados Seleccionados</h4>
    <div class="row destacados">
      <ul>
         {foreach from=$destacados item=destacado}
           <li class="col-xs-12 col-md-3">
             <a href="#" title="{$destacado.prod_nombre}" class="jsUnidad" id_producto="{$destacado.id_producto}" >
               <img src="{$destacado.imagenes_des}" class="img-responsive img-thumbnail" alt="{$destacado.prod_nombre}" title="{$destacado.prod_nombre}">
             </a>
             <h6><a href="#" class="jsUnidad" id_producto="{$destacado.id_producto}" >{$destacado.prod_nombre}</a></h6>
           </li>
        {/foreach}
      </ul>
    </div>
  </div>
</section>

<section>
      <h4>Nuestras </h4>
      <div class="row">
        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="LECAR" class="jsFiltrar" tipo="marca" filtro="1" ><img src="images/1.png"  class="jsListar" alt="LECAR"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BERTINI" class="jsFiltrar" tipo="marca" filtro="6"><img src="images/2.png" class="jsListar"  alt="BERTINI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="POZZI" class="jsFiltrar" tipo="marca" filtro="12"><img src="images/3.png" class="jsListar"  alt="POZZI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="ERCA" class="jsFiltrar" tipo="marca" filtro="7"><img src="images/5.png" class="jsListar"  alt="ERCA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PAUNY" class="jsFiltrar" tipo="marca" filtro="3"><img src="images/6.png" class="jsListar"  alt="PAUNY"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BAIMA" class="jsFiltrar" tipo="marca" filtro="8"><img src="images/7.png" class="jsListar"  alt="BAIMA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PRABA" class="jsFiltrar" tipo="marca" filtro="4"><img src="images/8.png" class="jsListar"  alt="PRABA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DON ROQUE" class="jsFiltrar" tipo="marca" filtro="5"><img src="images/9.png" class="jsListar"  alt="DON ROQUE"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="CESTARI" class="jsFiltrar" tipo="marca" filtro="9"><img src="images/10.png" class="jsListar"  alt="CESTARI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DE GRANDE" class="jsFiltrar" tipo="marca" filtro="10"><img src="images/11.png" class="jsListar"  alt="DE GRANDE" ></a>
        </div>
      </div>
  </section>
