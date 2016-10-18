<?php
/* Smarty version 3.1.30, created on 2016-10-18 17:07:40
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/listado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58063abc859757_96943745',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '94f00d59be22c1d99cb5cadc25f49f8ced73cc7c' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/listado.tpl',
      1 => 1476803239,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58063abc859757_96943745 (Smarty_Internal_Template $_smarty_tpl) {
?>

  <section>
    <h3>Nuevos y Usados</h3>
    <div id="ListadoMaquinas">
      <ul>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['todos']->value, 'unidad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['unidad']->value) {
?>
        <li>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-4">
              <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
" class="jsUnidad" id_producto="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
">
                <img src="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['imagenes_des'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
" class="img-thumbnail img-responsive">
              </a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-8">
              <h3>
                <a id_producto="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" href="#" title="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
" class="jsUnidad"><?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
</a>
              </h3>
              <ul class="features">
                  <li><span>Marca</span> : <?php echo $_smarty_tpl->tpl_vars['unidad']->value['marca_nombre'];?>
</li>
                  <li><span>Modelo</span> : <?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_modelo'];?>
</li>
                  <li><span>Estado</span> : <?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_estado'];?>
</li>
                  <li><span>Año</span> : <?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_anio'];?>
</li>
              </ul>
              <ul class="price">
                  <li><span>Precio</span> $  <?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_precio'];?>
</li>
              </ul>
              <a id_producto="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" href="#" class="btn btn-warning jsUnidad">Detalles Ver</a>
            </div>
          </div>
        </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

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
<?php }
}
