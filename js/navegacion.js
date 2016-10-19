function navegacion(seccion){
  $('main').html('<div id="onload"><button class="btn btn-lg btn-warning"><img src="images/cargando.gif" height="40" width="40" />Cargando...</button></div>');
  var ruta='http://localhost/maquinarias/'+seccion;
  $.ajax({
    url: ruta,
    method:"GET",
    dataType:"html",
    success: function(data){

      setTimeout(function() {
        $('main').html(data);
        $(".jsUnidad").on("click",function(event){
          var seccion = 'unidad';
          var id = $(this).attr("id_producto");
          var sec = seccion + '/' + id;
          navegacion(sec);
          event.preventDefault();
        });
      }, 1200);

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
