<?php
/* Smarty version 3.1.30, created on 2016-10-19 00:03:08
  from "C:\xampp\htdocs\maquinarias\templates\contacto.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58069c1c835ba4_38908250',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '644198e8b2197172b7cd2ceb36e062b5aba2af96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\contacto.tpl',
      1 => 1476740893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58069c1c835ba4_38908250 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section>
  <h3>Contacto</h3>
	<div class="row">
    <div class="col-md-6">
				<h6>Dejanos Tu mensaje</h6>
				<form id="formulario" action="#" method="post">
								<div class="form-group">
									<label for="name">Nombre y Apellido</label>
									<input type="text" name="name" id="name" size="25" maxlength="40" value="">
								</div> 
								<div class="form-group">
									<label for="email">Email</label>
									<input type="text" name="email" id="email" size="30" maxlength="60" value="">
								</div>
                <div class="form-group">
									<label for="telefono">telefono</label>
									<input type="text" name="telefono" id="telefono" size="35" maxlength="60" value="">
								</div>
                <div class="form-group">
									<label for="localidad">Localidad</label>
									<input type="text" name="localidad" id="localidad" size="40" maxlength="60" value="">
								</div>
								<div class="form-group">
									<label for="message">Mensaje</label>
									<textarea name="message" id="message" cols="50" rows="2"></textarea>
								</div>
								<div class="form-group">
									<input type="submit" id="submitButton" class="btn btn-default" name="submitButton" value="Enviar Mensaje">
								</div>
				</form>
    </div>
    <div class="col-md-6">
      <h6>Nuestros Contactos</h6>
      <address>
        <strong>Email</strong><br>
        <a href="mailto:#">info@maquinariasagricolas.com</a>
        <br>
        <strong>Telefono</strong><br>
        <abbr title="Phone">(0249) 4421369</abbr>
        <br>
        <strong>Celular</strong><br>
        <abbr title="Phone">(0249) 154567543</abbr>
      </address>
		</div>
	</div>
</section>
<?php }
}
