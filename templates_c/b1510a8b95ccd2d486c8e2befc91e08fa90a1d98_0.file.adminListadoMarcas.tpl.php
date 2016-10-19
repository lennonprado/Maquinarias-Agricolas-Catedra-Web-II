<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:53:14
  from "C:\xampp\htdocs\maquinarias\templates\adminListadoMarcas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807dd3a2ca0d8_07337123',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b1510a8b95ccd2d486c8e2befc91e08fa90a1d98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\adminListadoMarcas.tpl',
      1 => 1476910352,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807dd3a2ca0d8_07337123 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="container">
  <div class="row">
    <h4>Listado de Marcas</h4>
    <div class="row destacados" >
      <p><a  href="http://localhost/maquinarias/admin/marcas/agregar" class="btn btn-success">Agregar nueva marca</a></p>
      <ul class="list-group">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['mar_nombre'];?>
" class="jsUnidad"><?php echo $_smarty_tpl->tpl_vars['item']->value['mar_nombre'];?>
</a></h5>
          <p><i><?php echo $_smarty_tpl->tpl_vars['item']->value['mar_descripcion'];?>
</i></p>
          <p>
            <a role="button" href="http://localhost/maquinarias/admin/marcas/modificar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_marca'];?>
" class="btn btn-default">Modificar</a>
            <a role="button" href="http://localhost/maquinarias/admin/marcas/borrar/<?php echo $_smarty_tpl->tpl_vars['item']->value['id_marca'];?>
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
