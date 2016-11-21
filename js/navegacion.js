var config = {
  salir: '<a href="#" id="salir" >Salir</a>',
  ingresar: '<a href="admin/" >Ingresar</a>'
};

var reload;
$.ajax({ url: 'js/templates/cargando.mst',
   success: function(templateReceived){reload = templateReceived;}
});

function filtrar(ruta,tipo,filtro){
   $.post(ruta, {tipo: tipo, filtro:filtro}, function(result){
      setTimeout(function(){
         $('main').html(result);
         $(".jsUnidad").on("click",function(event){
           var seccion = 'unidad';
           var id = $(this).attr("id_producto");
           var sec = seccion + '/' + id;
           navegacion(sec);
           event.preventDefault();
         });
         $("html, body").animate({ scrollTop: 0 }, "slow");
       }, 1200);
    });
}

function navegacion(seccion){
  $("html, body").animate({ scrollTop: 0 }, "slow");
  $('main').html(reload);
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
           $('main').html(reload);
           var ruta = "http://localhost/maquinarias/listado";
           var tipo = $(this).attr('tipo');
           var filtro = $(this).attr('filtro');
           filtrar(ruta,tipo,filtro);
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
  if (document.getElementById(seccion)) {
     $("#"+seccion).addClass('active');
  }
}

$(".nav li a").on("click",function(event){
    var seccion = $(this).attr('id');
    navegacion(seccion);
    event.preventDefault();
});

function getCookie(cname){
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0)==' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) == 0) {
            return c.substring(name.length,c.length);
        }
    }
    return "";
}

function eraseCookie(name) {
    createCookie(name,"",-1);
}

$(document).ready(function(){
   $("#home").click();
   var seccion = $.cookie("seccion");

   if((seccion)&&(seccion!=1)){
      navegacion(seccion);
      $.cookie("seccion", 1, { path: '/' });
      }
   var usuario = $.cookie("usuario");

   if((usuario)&&(usuario!=1)){
      $('#login').html(config.salir);
   }
   else{
      $('#login').html(config.ingresar);
   }
   $('#salir').on("click",function(){
      $.cookie("seccion", 1, { path: '/' });
      $.cookie("usuario", 1, { path: '/' });
      location.href="http://localhost/maquinarias/admin/salir";
   });
});
