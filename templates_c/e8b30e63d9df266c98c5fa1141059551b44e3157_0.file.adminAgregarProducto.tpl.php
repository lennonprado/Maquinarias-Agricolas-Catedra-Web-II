<?php
/* Smarty version 3.1.30, created on 2016-10-19 18:42:18
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminAgregarProducto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807a26a205722_59034082',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8b30e63d9df266c98c5fa1141059551b44e3157' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/adminAgregarProducto.tpl',
      1 => 1476895209,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807a26a205722_59034082 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="container">
   <?php if (isset($_smarty_tpl->tpl_vars['mensaje']->value)) {?>
      <div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['tipoMensaje']->value;?>
" role="alert"><?php echo $_smarty_tpl->tpl_vars['mensaje']->value;?>
</div>
    <?php }?>

   <div class="row">
      <div class="col-md-6">
         <h2>Producto</h2>
         <form action="/maquinarias/admin/productos/agregar" method="post">
           <div class="form-group">
             <label for="prod_nombre">Categoria</label>
             <select class="form-control" name="prod_categoria" id="prod_categoria" >
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" ><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nombre'];?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

             </select>
           </div> 

           <div class="form-group" >
             <label for="prod_nombre">Marca</label>
             <select class="form-control" name="prod_marca" id="prod_marca">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'marca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['marca']->value) {
?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['marca']->value['id_marca'];?>
" ><?php echo $_smarty_tpl->tpl_vars['marca']->value['mar_nombre'];?>
</option>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

             </select>
           </div>

           <div class="form-group">
             <label for="Nombre">Nombre</label>
             <input type="text" name="prod_nombre" class="form-control" id="prod_nombre" placeholder="Nombre del producto" value="" required/>
           </div>

           <div class="form-group">
             <label for="Descripcion">Descripcion</label>
             <textarea class="form-control" name="prod_descripcion" id="prod_descripcion" rows="3"></textarea>
           </div>

           <div class="form-group">
             <label for="Modelo">Modelo</label>
             <input type="text" class="form-control" id="prod_modelo" name="prod_modelo" placeholder="Modelo del producto" value="" />
           </div>

           <div class="form-group">
             <label for="Año">Año</label>
             <input type="number" class="form-control" id="prod_anio" name="prod_anio" placeholder="Año del producto" value=""  />
           </div>

           <div class="form-group">
             <label for="Estado" >Estado</label>
             <select class="form-control" id="prod_estado" name="prod_estado" required>
               <option value="nuevo">Nuevo</option>
               <option value="usado">Usado</option>
             </select>
           </div>

           <div class="form-group">
             <label for="Precio">Precio</label>
             <input type="number" class="form-control" id="prod_precio" name="prod_precio" placeholder="Precio del producto" value="" step="any" />
           </div>

           <div class="form-group">
             <label for="Visible">Visible</label>
             <select class="form-control" id="prod_visible" name="prod_visible">
               <option value="1">Si</option>
               <option value="0">No</option>
             </select>
           </div>

           <input type="submit" value="Agregar" name="agregarProducto" class="btn btn-default" />
         </form>
      </div>
      <div class="col-md-6">
      </div>
   </div>
</section>
<?php }
}
