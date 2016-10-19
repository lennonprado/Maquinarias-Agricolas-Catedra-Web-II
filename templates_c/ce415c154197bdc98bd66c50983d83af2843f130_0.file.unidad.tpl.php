<?php
/* Smarty version 3.1.30, created on 2016-10-19 22:15:07
  from "C:\xampp\htdocs\maquinarias\templates\unidad.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5807d44b8ba6b6_28996208',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ce415c154197bdc98bd66c50983d83af2843f130' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\unidad.tpl',
      1 => 1476906982,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5807d44b8ba6b6_28996208 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h4>Detalles: <?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
</h4>
    </div>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
       <?php if ($_smarty_tpl->tpl_vars['imagen']->value['img_destacada'] == 0) {?>
          <div class="col-xs-4 col-md-4">
            <a data-toggle="lightbox" href="#">
              <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_url'];?>
" class="img-responsive img-thumbnail" width="300" height="200">
            </a>
          </div>
       <?php } else { ?>
          <div class="col-xs-12 col-md-8">
            <a data-toggle="lightbox" href="#">
              <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['img_url'];?>
" class="img-responsive img-thumbnail" width="800" height="600" >
            </a>
          </div>
       <?php }?>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    <div class="col-md-12">
      <article>
        <h4>Descripción</h4>
        <?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_descripcion'];?>

      </article>

      <h4>Caracteristicas</h4>
      <div class="table-responsive">
        <table width="100%" cellpadding="10" cellspacing="5" class="jsCaracteristicas table table-condensed">
          <thead>
            <tr>
              <th class="text-left">Caracteristica</th>
              <th class="text-right">Detalle</th>
            </tr>
          </thead>

          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caracteristicas']->value, 'caracteristca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caracteristca']->value) {
?>
            <tr>
               <td align="left">
                  <?php echo $_smarty_tpl->tpl_vars['caracteristca']->value['car_nombre'];?>

               </td>
               <td align="right">
                  <?php echo $_smarty_tpl->tpl_vars['caracteristca']->value['car_detalle'];?>

               </td>
            </tr>
         <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

         </tbody>

        </table>
      </div>
    </div>
</div>
</section>

<section>
  <div class="row">
    <h4>Usados Seleccionados</h4>
    <div class="row destacados">
      <ul>
         <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['destacados']->value, 'destacado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['destacado']->value) {
?>
           <li class="col-xs-12 col-md-3">
             <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
" class="jsUnidad" id_producto="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['id_producto'];?>
">
               <img src="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['imagenes_des'];?>
" class="img-responsive img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
">
             </a>
             <h6><a href="#" class="jsUnidad" id_producto="<?php echo $_smarty_tpl->tpl_vars['destacado']->value['id_producto'];?>
"><?php echo $_smarty_tpl->tpl_vars['destacado']->value['prod_nombre'];?>
</a></h6>
           </li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

      </ul>
    </div>
  </div>
</section>
<?php }
}
