<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:52:07
  from "C:\xampp\htdocs\maquinarias\templates\adminAgregarMarca.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807dcf76aedc1_58142216',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b643d8f0b324b88d29b7d6519a4833103d26c7e6' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\adminAgregarMarca.tpl',
      1 => 1476907013,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807dcf76aedc1_58142216 (Smarty_Internal_Template $_smarty_tpl) {
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
