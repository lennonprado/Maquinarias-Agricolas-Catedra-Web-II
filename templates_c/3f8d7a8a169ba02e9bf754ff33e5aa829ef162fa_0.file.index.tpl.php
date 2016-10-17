<?php
/* Smarty version 3.1.30, created on 2016-10-17 23:53:27
  from "C:\xampp\htdocs\maquinarias\templates\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58054857cbb452_93493340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3f8d7a8a169ba02e9bf754ff33e5aa829ef162fa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\maquinarias\\templates\\index.tpl',
      1 => 1476740893,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58054857cbb452_93493340 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE HTML>
<html lang="es">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Comercializacion de Maquinarias | Inicio</title>
  <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"><?php echo '</script'; ?>
>
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
  <!-- Optional theme -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
  <!-- Nuestra hoja de estilos -->
  <link rel="stylesheet" href="css/style.css" />
</head>
<body>
  <nav class="navbar" role="navigation" id="header">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="index.html"><img src="images/logo.png" title="Agencia de maquinarias" /></a>
      </div>
    <!-- Agrupar los enlaces de navegación, los formularios y cualquier otro elemento que se pueda ocultar al minimizar la barra -->
      <ul class="nav nav-pills pull-right">
        <li>
          <a href="#" id="home" class="active" >Inicio</a>
        </li>
        <li>
          <a href="#" id="nosotros" >Nosotros</a>
        </li>
        <li>
          <a href="#" id="lista" >Nuevos y Usados</a>
        </li>
        <li>
          <a href="#" id="contacto" >Contacto</a>
        </li>
      </ul>
    </div>
  </nav>
  <main class="container">
    <div id="onload">
      <button class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Cargando...</button>
    </div>
  </main>
  <footer class="container">
    <div class="col-xs-12 col-sm-6 col-md-4">
				<h4>Encontranos en</h4>
				<a href="">
					<img src="images/ubicacion.png" width="300" border="0" alt="Comercializacion Maquinarias - Ruta 226 Km 205, Tandil">
				</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
				<h4>Buscanos en</h4>
				<a href="https://www.facebook.com/" target="_blank">
					<img src="images/facebook.png" class="img_face" />
				</a>
		</div>
		<div class="col-xs-12 col-sm-6 col-md-4">
				<h4>Agencia de Maquinarias</h4>
				<div>
					<p>La  empresa comienza con la actividad en TANDIL en la comercialización de maquinarias agrícolas y ganaderas en el año 2000.</p><p> Desde ese momento y hasta  la fecha se destaca como una de las principales en rubro en TANDIL y la zona.</p>
					<p align="right"><strong>Agencia de Maquinarias</strong></p>
				</div>
		</div>
		<div class="col-xs-12 col-md-12" id="footer-contact-info">
      <ul>
			  <li class="address">Ruta 226 Km. 205, Tandil. Bs As (ARG)</li>
				<li class="tel">(0249) 4421369</li>
				<li class="tel">(0249) 4567543</li>
				<li class="email"><a href="mailto:imfo@consecionariademaquinarias.com">info@consecionariademaquinarias.com</a></li>
				<li class="facebook"><a href="https://www.facebook.com/" target="_blank">Facebook</a></li>
			</ul>
		</div>
    <div class="col-xs-12 col-md-12" id="footer-bottom">
			<div class="footer-notice">copyright © 2016 <a href="#" target="_blank">Realview</a></div>
		</div>
  </footer>
  <!-- Latest compiled and minified JavaScript -->
  <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"><?php echo '</script'; ?>
>
  <!-- Nuestros Js -->
  <?php echo '<script'; ?>
 src="../js/navegacion.js" ><?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
