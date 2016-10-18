<?php
/* Smarty version 3.1.30, created on 2016-10-18 02:20:25
  from "/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/unidad.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58056ac940efe1_32070580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e0d5914dd177d23418e578150c04b60c22abc066' => 
    array (
      0 => '/Applications/XAMPP/xamppfiles/htdocs/maquinarias/templates/unidad.tpl',
      1 => 1476750023,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58056ac940efe1_32070580 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <div class="row">
    <div class="col-xs-12 col-md-12">
      <h4 >Detalles: <?php echo $_smarty_tpl->tpl_vars['unidad']->value['prod_nombre'];?>
---</h4>
    </div>


    <div class="col-xs-12 col-md-8">
      <a data-toggle="lightbox" href="#">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imgen_destacada']->value['url'];?>
" class="img-responsive img-thumbnail" >
      </a>
    </div>


    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['imagenes']->value, 'imagen');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['imagen']->value) {
?>
    <div class="col-xs-4 col-md-4">
      <a data-toggle="lightbox" href="#">
        <img src="<?php echo $_smarty_tpl->tpl_vars['imagen']->value['url'];?>
" class="img-responsive img-thumbnail">
      </a>
    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>



    <div class="col-md-12">
      <article>
        <h4>Descripción</h4>
        <?php echo $_smarty_tpl->tpl_vars['prod_descripcion']->value;?>

      </article>

      <h4>Caracteristicas</h4>
      <div class="table-responsive">
        <table width="100%" cellpadding="10" cellspacing="5" class="jsCaracteristicas table table-condensed">
          <thead>
            <tr>
              <th class="text-left">Caracteristica</th>
              <th class="text-right">Detalle</th>
            </tr>
             <tfoot>
               <tr>
                 <td align="left">
                 	<input type="text" id="nombreCaracteristica" placeholder="Caracteristica" tabindex="1" />
                 </td>
                 <td align="right">
                   <input type="text" id="descripcionCaracteristica" placeholder="Detalle" tabindex="2" />
                   <input type="button" class="btn-warning btn-xs" value="Agregar" id="nuevaCaracteristica" tabindex="3" />
                 </td>
               </tr>
             </tfoot>
          </thead>

          <tbody>
          <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['caracteristicas']->value, 'caracteristca');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['caracteristca']->value) {
?>
            <tr>
               <td align="left">
                  <input type="text" id="nombreCaracteristica" placeholder="Caracteristica" tabindex="1" />
               </td>
               <td align="right">
                  <input type="text" id="descripcionCaracteristica" placeholder="Detalle" tabindex="2" />
                  <input type="button" class="btn-warning btn-xs" value="Agregar" id="nuevaCaracteristica" tabindex="3" />
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['usados']->value, 'usado');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['usado']->value) {
?>
           <li class="col-xs-12 col-md-3">
             <a href="#" title="<?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_nombre'];?>
" class="jsUnidad">
               <img src="<?php echo $_smarty_tpl->tpl_vars['usado']->value['img_url'];?>
" class="img-responsive img-thumbnail" alt="<?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_nombre'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_nombre'];?>
">
             </a>
             <h6><a href="#"><?php echo $_smarty_tpl->tpl_vars['usado']->value['prod_nombre'];?>
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
<?php echo '<script'; ?>
 src="files/js/servicio_rest.js" ><?php echo '</script'; ?>
>
<?php }
}
