<?php
/* Smarty version 3.1.30, created on 2016-10-19 16:07:13
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListadoCategorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58077e111b2967_04564827',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c803ebffe9f52d950d1cf15d0b85ed50e465f3c4' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListadoCategorias.tpl',
      1 => 1476885969,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58077e111b2967_04564827 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="container">
  <div class="row">
    <h4>Listado de Categorias</h4>
    <div class="row destacados" >
      <p><a  href="http://localhost/maquinarias/admin/categorias/agregar" class="btn btn-success">Agregar nueva Categoria</a></p>
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
          <p><i><?php echo $_smarty_tpl->tpl_vars['item']->value['cat_descripcion'];?>
</i></p>
          <p>
            <a role="button" href="http://localhost/maquinarias/admin/categorias/modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_categoria'];?>
" class="btn btn-default">Modificar</a>
            <a role="button" href="http://localhost/maquinarias/admin/categorias/eliminar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_categoria'];?>
" class="btn btn-default">Eliminar</a>
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
