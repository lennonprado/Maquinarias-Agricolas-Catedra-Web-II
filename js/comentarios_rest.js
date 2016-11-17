var mensaje;
$.ajax({ url: 'js/templates/mensajes.mst',
   success: function(templateReceived){mensaje = templateReceived;}
});

var reload;
$.ajax({ url: 'js/templates/cargando.mst',
   success: function(templateReceived){reload = templateReceived;}
});

var template;
$.ajax({ url: 'js/templates/comentarios.mst',
   success: function(templateReceived){template = templateReceived;}
});

$('#nuevoComentario').on("click",function(){

   var scrollPos =  $("#listaComentarios").offset().top;
   $(window).scrollTop(scrollPos);

   $('#jsComentarios').html(reload);
    var datos = {
      com_id_producto: $('#com_id_producto').val(),
      com_id_usuario: $('#com_id_usuario').val(),
      com_mensaje: $('#com_mensaje').val(),
      com_puntuacion: $('input:radio[name=com_puntuacion]:checked').val()
    };
    $('#com_mensaje').val('');
    $('#descripcionCaracteristica').val('');
    guardarComentario(datos);
});

function guardarComentario(data){
  var urlGuardar = 'http://localhost/maquinarias/api/comentario/';
  $.post( urlGuardar,data, function(result){

      setTimeout(function(){
          listarComentarios();
          var msj =  Mustache.render(mensaje,{msj:'Comentario creado correctamente'});
           $(".alert").html(msj); $(".alert").show(800);
           var scrollPos =  $(".alert").offset().top;
           $(window).scrollTop(scrollPos);
          setTimeout(function(){$(".alert").hide(800);}, 2000);
       }, 2000);

   });
}

function listarComentarios(){
   var id_producto = $('#com_id_producto').val();
  var urlLista='http://localhost/maquinarias/api/comentario/'+id_producto;
  $.ajax({
		url: urlLista,
		type: 'GET',
		dataType: 'JSON',
    success: function(resultData){

      var rendered = Mustache.render(template,{comentarios:resultData});
      $('#jsComentarios').html(rendered);

    },
    error: function(){
      $('.jsComentarios').before(config.error.listar);
    }
	});
	return true;
}

$('.jsIngresar').on('click',function(){
   var idpro=$(this).attr('idPro');
   $.cookie("seccion", "unidad/"+idpro, { path: '/' });
   location.href="http://localhost/maquinarias/admin/";
});


$(document).ready(function() {
   listarComentarios();
});
