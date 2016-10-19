<?php
/* Smarty version 3.1.30, created on 2016-10-19 05:12:25
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminAgregarCategorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806e4999ecc71_42288381',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c37c213247f7f270e2dd639e38b5d570a86ee44d' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminAgregarCategorias.tpl',
      1 => 1476846727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806e4999ecc71_42288381 (Smarty_Internal_Template $_smarty_tpl) {
?>

<section class="container">
  <div class="row">
    <h4>Nueva categorias</h4>
    <form method="post" action="">
      <div class="form-group">
        <label for="cat_nombre">Categoria:</label>
        <input type="text" class="form-control"  name="cat_nombre" placeholder="Nombre de la categoria">
      </div>
      <div class="form-group">
        <label for="descricipcion">Descripción:</label>
        <input type="text" class="form-control" name="cat_descripcion" placeholder="Descripcion corta de la categoria">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</section>
<?php }
}
