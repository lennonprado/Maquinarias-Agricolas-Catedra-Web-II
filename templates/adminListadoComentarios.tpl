
<section class="container">
  <div class="row">
    <h4>Listado de Comentarios</h4>
    <div class="row destacados" >

      <ul class="list-group">
      {if $comentarios}
         {foreach from=$comentarios item=item}
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="{$item.user_name}" class="jsUnidad">{$item.user_name}</a></h5>
          <p><i>{$item.com_mensaje}</i></p>
          <p><i>{$item.com_puntuacion}</i></p>
          <p>
            <a role="button" href="http://localhost/maquinarias/admin/comentarios/borrar/{$item.id_comentario}" class="btn btn-default">Eliminar</a>
          </p>
        </li>
        {/foreach}
      {else}
         <div id="alert" class="alert alert-danger" role="alert" >Sin Comentarios</div>
      {/if}
      </ul>
    </div>
  </div>
</section>
