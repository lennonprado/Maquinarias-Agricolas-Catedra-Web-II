<?php
/* Smarty version 3.1.30, created on 2016-10-18 01:49:38
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580563920d7448_25383373',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '957f7e2992aaffd7f4831dfd38a674ef89dd3765' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/home.tpl',
      1 => 1476748174,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580563920d7448_25383373 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['nuevos']->value, 'nuevo');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['nuevo']->value) {
?>
        <li class="col-xs-12 col-md-4">
          <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
" class="thumbnail jsUnidad">
            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['url_img'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
">
          </a>
          <h5><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
" class="jsUnidad"><?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
</a></h5>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
    <h4>destacados Seleccionados</h4>
    <div class="row destacados">
      <ul>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destacados']->value, 'destacado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['destacado']->value) {
?>
           <li class="col-xs-12 col-md-3">
             <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
" class="jsUnidad">
               <img src="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['img_url'];?>
" class="img-responsive img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
">
             </a>
             <h6><a href="#"><?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
</a></h6>
           </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
    </div>
  </div>
</section>

<section>
      <h4>Nuestras </h4>
      <div class="row">
        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="LECAR"><img src="images/1.png"  class="jsUnidad"  alt="LECAR"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BERTINI"><img src="images/2.png" class="jsUnidad"  alt="BERTINI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="POZZI"><img src="images/3.png" class="jsUnidad"  alt="POZZI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="ERCA"><img src="images/5.png" class="jsUnidad"  alt="ERCA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PAUNY"><img src="images/6.png" class="jsUnidad"  alt="PAUNY"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BAIMA"><img src="images/7.png" class="jsUnidad"  alt="BAIMA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PRABA"><img src="images/8.png" class="jsUnidad"  alt="PRABA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DON ROQUE"><img src="images/9.png" class="jsUnidad"  alt="DON ROQUE"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="CESTARI"><img src="images/10.png" class="jsUnidad"  alt="CESTARI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DE GRANDE"><img src="images/11.png" class="jsUnidad"  alt="DE GRANDE" ></a>
        </div>
      </div>
  </section>
<?php }
}
