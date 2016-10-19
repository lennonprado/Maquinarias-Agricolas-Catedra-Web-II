<?php
/* Smarty version 3.1.30, created on 2016-10-19 20:23:25
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminModificarMarca.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807ba1deed5f1_02946883',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dad181e7d5f3a88bb8f20e886933fe8d2286f243' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminModificarMarca.tpl',
      1 => 1476901403,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807ba1deed5f1_02946883 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="container">
  <div class="row">
    <h4>Nueva marca</h4>
    <form method="post" action="">
      <div class="form-group">
        <label for="mar_nombre">Marca:</label>
        <input type="text" class="form-control"  name="mar_nombre" placeholder="Nombre de la marca" value="<?php echo $_smarty_tpl->tpl_vars['mar_nombre']->value;?>
">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Descripción:</label>
        <input type="text" class="form-control" name="mar_descripcion" placeholder="Descripcion corta de la marca" value="<?php echo $_smarty_tpl->tpl_vars['mar_descripcion']->value;?>
">
      </div>
      <button type="submit" class="btn btn-default">Guardar</button>
    </form>
  </div>
</section>
<?php }
}
