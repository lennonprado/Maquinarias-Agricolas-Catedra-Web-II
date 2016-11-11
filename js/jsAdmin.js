
$('.jsDestacarImg').on('click',function(){
   var idImg=$(this).attr('id');
   var idPro=$(this).attr('idPro');
   var url = "/maquinarias/admin/productos/modificar/"+idPro;
   $.post( url, {id_destacar_imagen:idImg}, function(data) {
     $('.jsDestacarImg').show();
     $('#'+idImg).hide();
     $('#alert').addClass('alert-success');
     $('#alert').html("Imagen Destacada Correctamente");
     $('#alert').show();
     setTimeout(function(){ $('#alert').hide(300);}, 1200);
   });
});

$(document).ready(function(){
   if($('#alert').is(":visible"))
      {setTimeout(function(){ $('#alert').hide(300);}, 1600);}
});

$(function() {

    $('#login-form-link').click(function(e) {
    	$("#login-form").delay(100).fadeIn(100);
 		$("#register-form").fadeOut(100);
		$('#register-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#register-form-link').click(function(e) {
		$("#register-form").delay(100).fadeIn(100);
 		$("#login-form").fadeOut(100);
		$('#login-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});

});
