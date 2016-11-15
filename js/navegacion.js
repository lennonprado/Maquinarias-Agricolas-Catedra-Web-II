function navegacion(seccion){
  var body = $("html, body");
  body.stop().animate({scrollTop:0}, '500', 'swing');
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

        $('.jsFiltrar').on("click",function(){
           $('main').html('<div id="onload"><button class="btn btn-lg btn-warning"><img src="images/cargando.gif" height="40" width="40" />Cargando...</button></div>');
           var ruta = "http://localhost/maquinarias/listado";
           var tipo = $(this).attr('tipo');
           var filtro = $(this).attr('filtro');
           $.post(ruta, {tipo: tipo, filtro:filtro}, function(result){
              setTimeout(function(){
                 $('main').html(result);
                 $("html, body").animate({ scrollTop: 0 }, "slow");
                 }, 1200);
            });
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
