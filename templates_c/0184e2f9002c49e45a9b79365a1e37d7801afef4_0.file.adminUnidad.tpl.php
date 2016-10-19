<?php
/* Smarty version 3.1.30, created on 2016-10-19 04:20:08
  from "C:\xampp\htdocs\maquinarias\templates\adminUnidad.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5806d8581195e7_02151690',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0184e2f9002c49e45a9b79365a1e37d7801afef4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\adminUnidad.tpl',
      1 => 1476843603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5806d8581195e7_02151690 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form action="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
">
  <div class="form-group">
    <label for="prod_nombre">Categoria</label>
    <select>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
        <option><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nombre'];?>
</option
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

    </select>
  </div>
  <div class="form-group">
    <label for="prod_nombre">Nombre</label>
    <input type="text" class="form-control" id="prod_nombre" placeholder="Nombre del producto" value="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">prod_descripcion</label>
    <textarea></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<a href="#" title="<?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_nombre'];?>
" class="jsUnidad"><?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_nombre'];?>
</a>
</h3>
<ul class="features">
  <li><span>Marca</span> : <?php echo $_smarty_tpl->tpl_vars['usado']->value['mar_nombre'];?>
</li>
  <li><span>Modelo</span> : <?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_modelo'];?>
</li>
  <li><span>Estado</span> : <?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_estado'];?>
</li>
  <li><span>Año</span> : <?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_anio'];?>
</li>
</ul>
<ul class="price">
  <li><span>Precio</span> $  <?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_precio'];?>
</li>
<?php }
}
