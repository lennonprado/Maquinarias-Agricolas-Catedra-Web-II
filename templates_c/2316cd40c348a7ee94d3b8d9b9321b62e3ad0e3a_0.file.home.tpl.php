<?php
/* Smarty version 3.1.30, created on 2016-10-19 00:12:08
  from "C:\xampp\htdocs\maquinarias\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58069e38614363_36527453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2316cd40c348a7ee94d3b8d9b9321b62e3ad0e3a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\home.tpl',
      1 => 1476828709,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58069e38614363_36527453 (Smarty_Internal_Template $_smarty_tpl) {
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
" class="thumbnail jsUnidad" id_producto="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['id_producto'];?>
">
            <img class="img-responsive" src="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['imagenes_des'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
">
          </a>
          <h5><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
" class="jsUnidad" id_producto="<?php echo $_smarty_tpl->tpl_vars['nuevo']->value['id_producto'];?>
" ><?php echo $_smarty_tpl->tpl_vars['nuevo']->value['prod_nombre'];?>
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
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_nombre'];?>
</a></li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </ul>
      </div>
      <div class="col-sm-6 col-md-6  browser-cat">
        <h5>Marcas</h5>
        <ul >
           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
            <li><a href="#"><?php echo $_smarty_tpl->tpl_vars['item']->value['marca_nombre'];?>
</a></li>
          <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
            <input type="submit" id="homeSearchButton" name="homeSearchButton" value="Buscar" class="jsListar" >
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
" class="jsUnidad" id_producto="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['id_producto'];?>
" >
               <img src="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['imagenes_des'];?>
" class="img-responsive img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
">
             </a>
             <h6><a href="#" class="jsUnidad" id_producto="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['id_producto'];?>
" ><?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
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
          <a href="#" title="LECAR"><img src="images/1.png"  class="jsListar" alt="LECAR"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BERTINI"><img src="images/2.png" class="jsListar"  alt="BERTINI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="POZZI"><img src="images/3.png" class="jsListar"  alt="POZZI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="ERCA"><img src="images/5.png" class="jsListar"  alt="ERCA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PAUNY"><img src="images/6.png" class="jsListar"  alt="PAUNY"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="BAIMA"><img src="images/7.png" class="jsListar"  alt="BAIMA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="PRABA"><img src="images/8.png" class="jsListar"  alt="PRABA"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DON ROQUE"><img src="images/9.png" class="jsListar"  alt="DON ROQUE"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="CESTARI"><img src="images/10.png" class="jsListar"  alt="CESTARI"></a>
        </div>

        <div class="col-xs-3 col-md-1 " >
          <a href="#" title="DE GRANDE"><img src="images/11.png" class="jsListar"  alt="DE GRANDE" ></a>
        </div>
      </div>
  </section>
<?php }
}
