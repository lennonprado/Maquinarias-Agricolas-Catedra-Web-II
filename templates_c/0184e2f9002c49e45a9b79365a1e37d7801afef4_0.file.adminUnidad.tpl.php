<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:31:47
  from "C:\xampp\htdocs\maquinarias\templates\adminUnidad.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807d8336de999_62302057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0184e2f9002c49e45a9b79365a1e37d7801afef4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\adminUnidad.tpl',
      1 => 1476909105,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807d8336de999_62302057 (Smarty_Internal_Template $_smarty_tpl) {
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
         <form action="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" method="post">
           <div class="form-group">
             <label for="prod_nombre">Categoria</label>
             <select class="form-control" name="prod_categoria" id="prod_categoria" >
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
?>
                 <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value['id_categoria'];?>
" <?php if ($_smarty_tpl->tpl_vars['categoria']->value['id_categoria'] == $_smarty_tpl->tpl_vars['unidad']->value['prod_categoria']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['categoria']->value['cat_nombre'];?>
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
" <?php if ($_smarty_tpl->tpl_vars['marca']->value['id_marca'] == $_smarty_tpl->tpl_vars['unidad']->value['prod_marca']) {?>selected<?php }?> ><?php echo $_smarty_tpl->tpl_vars['marca']->value['mar_nombre'];?>
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
             <input type="text" name="prod_nombre" class="form-control" id="prod_nombre" placeholder="Nombre del producto" value="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
" required/>
           </div>

           <div class="form-group">
             <label for="Descripcion">Descripcion</label>
             <textarea class="form-control" name="prod_descripcion" id="prod_descripcion" rows="3"><?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_descripcion'];?>
</textarea>
           </div>

           <div class="form-group">
             <label for="Modelo">Modelo</label>
             <input type="text" class="form-control" id="prod_modelo" name="prod_modelo" placeholder="Modelo del producto" value="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_modelo'];?>
" />
           </div>

           <div class="form-group">
             <label for="Año">Año</label>
             <input type="text" class="form-control" id="prod_anio" name="prod_anio" placeholder="Modelo del producto" value="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_anio'];?>
" />
           </div>

           <div class="form-group">
             <label for="Estado">Estado</label>
             <select class="form-control" id="prod_estado" name="prod_estado" required>
               <option value="nuevo" <?php if ($_smarty_tpl->tpl_vars['unidad']->value['prod_estado'] == "nuevo") {?> selected <?php }?> >Nuevo</option>
               <option value="usado" <?php if ($_smarty_tpl->tpl_vars['unidad']->value['prod_estado'] == "usado") {?> selected <?php }?> >Usado</option>
             </select>
           </div>

           <div class="form-group">
             <label for="Precio">Precio</label>
             <input type="text" class="form-control" id="prod_precio" name="prod_precio" placeholder="Modelo del producto" value="<?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_precio'];?>
" />
           </div>

           <div class="form-group">
             <label for="Visible">Visible</label>
             <select class="form-control" id="prod_visible" name="prod_visible">
               <option value="1" <?php if ($_smarty_tpl->tpl_vars['unidad']->value['prod_visible'] == 1) {?> selected <?php }?> >Si</option>
               <option value="0" <?php if ($_smarty_tpl->tpl_vars['unidad']->value['prod_visible'] == 0) {?> selected <?php }?> >No</option>
             </select>
           </div>

           <input type="submit" value="Modificar" name="modificarProducto" class="btn btn-default" />

         </form>
      </div>
      <div class="col-md-6">
         <h2>Imagenes</h2>
         <form action="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" method="post" class="form-inline" enctype="multipart/form-data">

            <div class="form-group">
             <label for="exampleInputFile">Subir Imagen</label>
             <input type="file" name="imagenes[]" required value="" multiple>
             <p class="help-block">Imagenes permitidas, JPG, PNG, GIF</p>
           </div>
            <input type="submit" value="Cargar" name="crearImagen" class="btn btn-default" />

         </form>
            <br />
            <?php if ($_smarty_tpl->tpl_vars['imagenes']->value) {?>
            <div class="row">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
               <div class="col-md-3">
                  <img src="/maquinarias/<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_url'];?>
" width="100" height="100" />
                  <?php if (!$_smarty_tpl->tpl_vars['imagen']->value['img_destacada']) {?>
                  <form action="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" method="post" class="form-inline" >
                     <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
" name="id_destacar_imagen" id="id_destacar_imagen" />
                     <input type="submit" value="Destacar" name="eliminarImagen" class="btn btn-success btn-xs" />
                  </form>
                  <?php }?>
                  <form action="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" method="post" class="form-inline" >
                     <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['id_imagen'];?>
" name="id_eliminar_imagen" id="id_eliminar_imagen" />
                     <input type="submit" value="Eliminar" name="eliminarImagen" class="btn btn-danger btn-xs" />
                  </form>

               </div>
               <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <?php } else { ?>
               <h4>Sin imagenes</h4>
            <?php }?>


         <form action="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" method="post" class="form-inline">
            <h2>Caracteristicas</h2>

            <div class="form-group">
              <label for="Precio">Nombre</label>
              <input type="text" class="form-control" id="car_nombre" name="car_nombre" placeholder="Nombre de la caracteristica" value="" />
            </div>

            <div class="form-group">
              <label for="Precio">Detalle</label>
              <input type="text" class="form-control" id="car_detalle" name="car_detalle" placeholder="Detalle de la caracteristica" value="" />
            </div>

            <input type="submit" value="Crear" name="crearCaracteristica" class="btn btn-default" />
         </form>

            <br />
            <?php if ($_smarty_tpl->tpl_vars['caracteristicas']->value) {?>
            <div class="row">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caracteristicas']->value, 'caracteristica');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caracteristica']->value) {
?>
            <div class="col-md-4">
               Nombre: <?php echo $_smarty_tpl->tpl_vars['caracteristica']->value['car_nombre'];?>
<br />
               Detalle: <?php echo $_smarty_tpl->tpl_vars['caracteristica']->value['car_detalle'];?>

               <form action="/maquinarias/admin/productos/modificar/<?php echo $_smarty_tpl->tpl_vars['unidad']->value['id_producto'];?>
" method="post" class="form-inline" >
                  <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['caracteristica']->value['id_caracteristica'];?>
" name="id_eliminar_caracteristica" id="id_eliminar_caracteristica" />
                  <input type="submit" value="Eliminar" name="eliminarCaracteristica" class="btn btn-danger btn-xs" />
               </form>
            </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

            </div>
            <?php } else { ?>
               <h4>Sin caracteristicas</h4>
            <?php }?>

      </div>

   </div>

</section>
<?php }
}
