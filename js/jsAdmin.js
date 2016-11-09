
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
