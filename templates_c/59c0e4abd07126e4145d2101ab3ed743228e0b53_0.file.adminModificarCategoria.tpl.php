<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:51:06
  from "C:\xampp\htdocs\maquinarias\templates\adminModificarCategoria.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807dcba5af075_26932102',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '59c0e4abd07126e4145d2101ab3ed743228e0b53' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\adminModificarCategoria.tpl',
      1 => 1476907013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807dcba5af075_26932102 (Smarty_Internal_Template $_smarty_tpl) {
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
