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
      <img src="./files/img/front_don_francisco.jpg" />
    </div>
    <div class="item">
      <img src="./files/img/front_don_francisco1.jpg"  />
    </div>
    <div class="item">
      <img src="./files/img/front_don_francisco2.jpg" />
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
          <a href="#" title="{$nuevo.prod_nombre}" class="thumbnail jsUnidad">
            <img class="img-responsive" src="{$nuevo.url_img}" alt="{$nuevo.prod_nombre}" title="{$nuevo.prod_nombre}">
          </a>
          <h5><a href="#" title="{$nuevo.prod_nombre}" class="jsUnidad">{$nuevo.prod_nombre}</a></h5>
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
        <h5>Rubro</h5>
        <ul>
          <li><a href="#">cosechadoras</a></li>
          <li><a href="#">sembradoras</a></li>
          <li><a href="#">Tractores</a></li>
          <li><a href="#">Tolvas</a></li>
          <li><a href="#">implementos</a></li>
          <li><a href="#">Otros</a></li>
        </ul>
      </div>
      <div class="col-sm-6 col-md-6  browser-cat">
        <h5></h5>
        <ul >
          <li><a href="#">Baima</a></li>
          <li><a href="#">Praba</a></li>
          <li><a href="#">Cestari</a></li>
          <li><a href="#">Don Roque</a></li>
          <li><a href="#">de Grande</a></li>
          <li><a href="#">Otras</a></li>
        </ul>
      </div>
    </div>
    <div class="col-sm-6 col-md-4">
      <h4>busqueda</h4>
      <div id="homeSearch">
        <form action="#" method="get">
          <div>
            <label for="marca">Marca</label>
            <input name="modelo" id="modelo" type="text">
          </div>
          <div>
            <label for="make_modelsub">Modelo</label>
            <input name="modelo" id="modelo" type="text" />
          </div>
          <div>
            <input type="submit" id="homeSearchButton" name="homeSearchButton" value="Buscar" class="jsUnidad" >
          </div>
        </form>
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

<section>
      <h4>Nuestras </h4>
      <div class="row">
        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="LECAR"><img src="./files/img/1.png"  class="jsUnidad"  alt="LECAR"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BERTINI"><img src="./files/img/2.png" class="jsUnidad"  alt="BERTINI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="POZZI"><img src="./files/img/3.png" class="jsUnidad"  alt="POZZI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="ERCA"><img src="./files/img/5.png" class="jsUnidad"  alt="ERCA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PAUNY"><img src="./files/img/6.png" class="jsUnidad"  alt="PAUNY"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BAIMA"><img src="./files/img/7.png" class="jsUnidad"  alt="BAIMA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PRABA"><img src="./files/img/8.png" class="jsUnidad"  alt="PRABA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DON ROQUE"><img src="./files/img/9.png" class="jsUnidad"  alt="DON ROQUE"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="CESTARI"><img src="./files/img/10.png" class="jsUnidad"  alt="CESTARI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DE GRANDE"><img src="./files/img/11.png" class="jsUnidad"  alt="DE GRANDE" ></a>
        </div>
      </div>
  </section>
