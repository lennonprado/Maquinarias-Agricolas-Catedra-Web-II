<?php
/* Smarty version 3.1.30, created on 2016-10-18 19:40:23
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListadoMarcas.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58065e87478719_97544695',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bb351421f27308306982e78e0ed621adab4738a1' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminListadoMarcas.tpl',
      1 => 1476812418,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58065e87478719_97544695 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="container">
  <div class="row">
    <h4>Listado de Marcas</h4>
    <div class="row destacados" >
      <p><button type="button" class="btn btn-success">Agregar nueva Marca</button></p>
      <ul class="list-group">
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['prod_nombre'];?>
" class="jsUnidad"><?php echo $_smarty_tpl->tpl_vars['item']->value['marca_nombre'];?>
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
