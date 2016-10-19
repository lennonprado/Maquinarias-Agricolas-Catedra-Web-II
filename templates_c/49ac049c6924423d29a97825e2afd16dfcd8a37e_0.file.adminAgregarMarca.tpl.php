<?php
/* Smarty version 3.1.30, created on 2016-10-19 17:08:49
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminAgregarMarca.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58078c8118f897_67314897',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '49ac049c6924423d29a97825e2afd16dfcd8a37e' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminAgregarMarca.tpl',
      1 => 1476888993,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58078c8118f897_67314897 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="container">
  <div class="row">
    <h4>Nueva marca</h4>
    <form method="post" action="">
      <div class="form-group">
        <label for="mar_nombre">Marca:</label>
        <input type="text" class="form-control"  name="mar_nombre" placeholder="Nombre de la marca">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Descripción:</label>
        <input type="text" class="form-control" name="mar_descripcion" placeholder="Descripcion corta de la marca">
      </div>
      <button type="submit" class="btn btn-default">Guardar</button>
    </form>
  </div>
</section>
<?php }
}
