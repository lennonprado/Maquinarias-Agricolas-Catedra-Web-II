<?php
/* Smarty version 3.1.30, created on 2016-10-19 05:29:43
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminModificarCategoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806e8a7e4bba8_15150723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '253212c99d2fd9b006feb4a5968d87005038d8bc' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminModificarCategoria.tpl',
      1 => 1476847778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806e8a7e4bba8_15150723 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="container">
  <div class="row">
    <h4>Nueva categoria</h4>
    <form action="" method="post">
      <div class="form-group">
        <label for="cat_nombre">Categoria:</label>
        <input type="text" class="form-control" name="cat_nombre" placeholder="Nombre de la categoria" value="<?php echo $_smarty_tpl->tpl_vars['cat_nombre']->value;?>
">
      </div>
      <div class="form-group">
        <label for="cat_descripcion">Descripción:</label>
        <input type="text" class="form-control" name="cat_descripcion" placeholder="Descripcion corta de la categoria" value="<?php echo $_smarty_tpl->tpl_vars['cat_descripcion']->value;?>
">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</section>
<?php }
}
