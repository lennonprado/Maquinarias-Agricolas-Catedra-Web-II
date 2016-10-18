$(document).ready(function(){

$('#agregarCaracteristicaBtn').click(function(){
   event.preventDefault();
   $.post( "index.php?action=guardar_tarea",$("#formCaracteristicas").serialize(), function(data) {
     $('#listaCaracteristicas').html(data);
     $('#caracteristicaNombre').val('');
     $('#caracteristicaDescripcion').val('');
   });
});

$('.eliminarCaracteristica').click(function(){
event.preventDefault();
$.get( "index.php?action=eliminar_tarea",{ id_caracteristica: $(this).attr("data-idcaracteristica") }, function(data) {
  $('#listaCaracteristicas').html(data);
  $('#caracteristicaNombre').val('');
  $('#caracteristicaDescripcion').val('');
});

});
});
