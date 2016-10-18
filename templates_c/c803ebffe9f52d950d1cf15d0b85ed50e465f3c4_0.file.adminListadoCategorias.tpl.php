<?php
/* Smarty version 3.1.30, created on 2016-10-18 19:39:46
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListadoCategorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58065e62f242e2_25789341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c803ebffe9f52d950d1cf15d0b85ed50e465f3c4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListadoCategorias.tpl',
      1 => 1476812383,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58065e62f242e2_25789341 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="container">
  <div class="row">
    <h4>Listado de Categorias</h4>
    <div class="row destacados" >
      <p><button type="button" class="btn btn-success">Agregar nueva Categoria</button></p>
      <ul class="list-group">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" class="jsUnidad"><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_nombre'];?>
</a></h5>
          <p>
            <button type="button" class="btn btn-modificar">Modificar</button>
            <button type="button" class="btn btn-eliminar">Eliminar</button>
          </p>
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
<?php }
}
