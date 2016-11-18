var id_producto = $('#com_id_producto').val();

var mensaje;
$.ajax({ url: 'http://localhost/maquinarias/js/templates/mensajes.mst',
   success: function(templateReceived){mensaje = templateReceived;}
});

var reload;
$.ajax({ url: 'http://localhost/maquinarias/js/templates/cargando.mst',
   success: function(templateReceived){reload = templateReceived;}
});

var template;
$.ajax({ url: 'http://localhost/maquinarias/js/templates/admincomentarios.mst',
   success: function(templateReceived){template = templateReceived;}
});


function listarComentarios(){
   var urlLista='http://localhost/maquinarias/api/comentario/';
   $.ajax({
		url: urlLista,
		type: 'GET',
		dataType: 'JSON',
    success: function(resultData){
      var rendered = Mustache.render(template,{comentarios:resultData});
      $('#jsComentarios').html(rendered);

      $('.jsEliminarComentario').click(function(){
         var idPro=$(this).attr('id');
         urlLista=urlLista+idPro;
         $.ajax({
             url: urlLista,
             type: 'DELETE',
             data: idPro,
             contentType: 'JSON',
             success: function(resultData){
                console.log(resultData);
                var msj =  Mustache.render(mensaje,{msj:"Comentario eliminado correctamente"});
                $(".alert").html(msj);
                $(".alert").show(800);
                $('#jsComentarios').html(reload);
                listarComentarios();
                setTimeout(function(){$(".alert").hide(800);}, 2000);
            },
            error: function(){
              var msj =  Mustache.render(mensaje,{msj:'Error al eliminar el cometanrios'});
              $(".alert").html(msj);
              $(".alert").show(800);
            }
           });
      });

    },
    error: function(){
      var msj =  Mustache.render(mensaje,{msj:'Error al listar cometanrios'});
      $(".alert").html(msj);
      $(".alert").show(800);
    }
	});
	return true;
}

$(document).ready(function() {
   listarComentarios();
});
