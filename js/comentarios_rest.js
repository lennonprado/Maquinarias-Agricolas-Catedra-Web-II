var config = {
  exito: {
    creado:'<div class="alert alert-success alert-dismissible" role="alert"><a class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>Caracteristica <strong>Creada</strong> Correctamente</div>',
    borrado:'<div class="alert alert-success alert-dismissible" role="alert"><a class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a>Caracteristica <strong>Borrada</strong> Correctamente</div>'
  },
  error: {
    creado:'<div class="alert alert-danger alert-dismissible" role="alert"><a class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a><strong>Error</strong> al guardar la Caracteristica</div>',
    borrado:'<div class="alert alert-danger alert-dismissible" role="alert"><a class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a><strong>Error</strong> al Borrar la Caracteristica</div>',
    listar:'<div class="alert alert-danger alert-dismissible" role="alert"><a class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></a><strong>Error</strong> al Listar las Comentarios</div>'
  }
};

$('#nuevoComentario').on("click",function(){
    var datos = {
      group: "28",
      thing: {
        nombre:$('#nombreCaracteristica').val(),
        caracteristica:$('#descripcionCaracteristica').val()
      }
    };
    $('#nombreCaracteristica').val('');
    $('#descripcionCaracteristica').val('');
    guardarComentario(datos)
});

function guardarComentario(data){
  var urlGuardar = 'http://web-unicen.herokuapp.com/api/create';
  $.ajax({
    method: 'POST',
    dataType: 'JSON',
    //se debe serializar (stringify) la informacion (el "data:" de ida es de tipo string)
    data: JSON.stringify(data),
    contentType: 'application/json; charset=utf-8',
    url: urlGuardar,
    success: function(resultData){
		 var caracteristica=resultData.information['thing'];
         html = '<tr id="'+resultData.information['_id']+'"><td class="text-left"><strong>'+caracteristica.nombre+'</strong></td><td class="text-right">'+caracteristica.caracteristica+' <span class="glyphicon glyphicon-trash jsEliminar" title="Eliminar Comentarios" aria-hidden="true" idFila="'+resultData.information['_id']+'"></span></td></tr>';

		 $('.jsComentarios tbody').append(html);

     $('.jsComentarios').before(config.exito.creado);
		 $('#nombreCaracteristica').focus();
     setTimeout(function() { $(".alert").hide(800); }, 3000);
      },
    error:function(jqxml, status, errorThrown){
       $('.jsComentarios').before(config.error.creado);
       setTimeout(function() { $(".alert").hide(800); }, 3000);
       }
	});
}

function listarComentarios(){
  var urlLista='http://web-unicen.herokuapp.com/api/group/28';
  $.ajax({
		url: urlLista,
		type: 'GET',
		dataType: 'JSON',
    success: function(resultData){
       var html ='';
       for (var i = 0; i < resultData.information.length; i++) {
         var caracteristica=resultData.information[i]['thing'];
         html += '<tr id="'+resultData.information[i]['_id']+'"><td class="text-left"><strong>'+caracteristica.nombre+'</strong></td><td class="text-right">'+caracteristica.caracteristica+' <span class="glyphicon glyphicon-trash jsEliminar" title="Eliminar Comentarios" aria-hidden="true" idFila="'+resultData.information[i]['_id']+'"></span></td></tr>';
       }
       $('.jsComentarios tbody').html(html);

    },
    error: function(){
      $('.jsComentarios').before(config.error.listar);
    }
	});
	return true;
}

listarComentarios();

$('.jsIngresar').on('click',function(){
   var idpro=$(this).attr('idPro');
   $.cookie("seccion", "unidad/"+idpro, { path: '/' });
   location.href="http://localhost/maquinarias/admin/";
});

$(document).ready(function() {
    // show the alert
});
