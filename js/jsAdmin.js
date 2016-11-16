//manejo de imagenes
$('.jsDestacarImg').on('click',function(){
   var idImg=$(this).attr('id');
   var idPro=$(this).attr('idPro');
   var url = "/maquinarias/admin/productos/modificar/"+idPro;
   $.post( url, {id_destacar_imagen:idImg}, function(data){
     $('.jsDestacarImg').show();
     $('#'+idImg).hide();
     $('#alert').addClass('alert-success');
     $('#alert').html("Imagen Destacada Correctamente");
     $('#alert').show();
     setTimeout(function(){ $('#alert').hide(300);}, 1200);
   });
});

//login
$(function() {
    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
      $("#remember-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
      $("#remember-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
   $('.forgot-password').click(function(e) {
		$("#register-form").fadeOut(100);
 		$("#login-form").fadeOut(100);
      $("#remember-form").delay(100).fadeIn(100);
      $('#login-form-link').removeClass('active');
      $('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
});

$(document).ready(function(){
   if($('#alert').is(":visible")){
      setTimeout(function(){ $('#alert').hide(300);}, 1600);
   }

   $("#login-form").submit(function(){
      $.cookie("usuario", "usuario", { path: '/' });
   });

});
