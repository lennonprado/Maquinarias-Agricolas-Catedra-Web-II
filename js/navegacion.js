function navegacion(seccion){
  $('main').html('<div id="onload"><button class="btn btn-lg btn-warning"><span class="glyphicon glyphicon-refresh glyphicon-refresh-animate"></span> Cargando...</button></div>');
  var ruta='http://localhost/maquinarias/'+seccion;
  $.ajax({
    url: ruta,
    method:"GET",
    dataType:"html",
    success: function(data){

      $('main').fadeIn(20000).html(data);

      $(".jsUnidad").on("click",function(event){         
        var seccion = 'unidad';
        var id = $(this).attr("id_producto");
        var sec = seccion + '/' + id;
        navegacion(sec);
        event.preventDefault();
      });

    },
    statusCode: {
      404: function() {
        alert( "La pagina no existe" );
      }
    }
  });
  $(".nav li a").removeClass('active');
  $("#"+seccion).addClass('active');
}

$(".nav li a").on("click",function(event){
    var seccion = $(this).attr('id');
    navegacion(seccion);
    event.preventDefault();
});

$(document).ready(function(){
  $("#home").click();
});
