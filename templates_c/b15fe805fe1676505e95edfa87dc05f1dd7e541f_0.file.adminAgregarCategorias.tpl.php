<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:16:57
  from "C:\xampp\htdocs\maquinarias\templates\adminAgregarCategorias.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807d4b93f8bd9_54403914',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b15fe805fe1676505e95edfa87dc05f1dd7e541f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\adminAgregarCategorias.tpl',
      1 => 1476907013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807d4b93f8bd9_54403914 (Smarty_Internal_Template $_smarty_tpl) {
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
