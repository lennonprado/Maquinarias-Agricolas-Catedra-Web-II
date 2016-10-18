<?php
/* Smarty version 3.1.30, created on 2016-10-18 19:19:59
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListado.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_580659bf552ee2_37994828',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '918059b507ce2a140e06ae60a0894face9d6f190' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListado.tpl',
      1 => 1476811197,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_580659bf552ee2_37994828 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="container">
  <div class="row">
    <h4>Listado de productos</h4>
    <div class="row destacados" >
      <p><button type="button" class="btn btn-success">Agregar nuevo producto</button></p>
         <div class="row">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
          <div class="col-md-4">
            <div class="thumbnail">
              <img src="../<?php echo $_smarty_tpl->tpl_vars['item']->value['imagenes_des'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" height="200" >
              <div class="caption">
                <h3><?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
</h3>
                <p><?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
</p>
                <p><a href="#" class="btn btn-primary" role="button">Modificar</a> <a href="#" class="btn btn-default" role="button">Eliminar</a></p>
              </div>
            </div>
          </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </div>
    </div>
  </div>
</section>
<?php }
}
