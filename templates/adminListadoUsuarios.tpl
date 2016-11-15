<section class="container">
  <div class="row">
    <h4>Listado de Usuarios</h4>
    {if isset($mensaje)}
      <div id="alert" class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}
    <div class="row destacados" >
      <p><a  href="http://localhost/maquinarias/admin/usuarios/agregar" class="btn btn-success">Agregar nuevo usuario</a></p>
      <ul class="list-group">
      {if $usuarios}
         {foreach from=$usuarios item=item}
        <li class="list-group-item col-md-4">
          <h5><a href="#" title="{$item.user_name}" class="jsUnidad">{$item.user_name}</a></h5>
          <p><i>{$item.user_alta}</i></p>
          <p><i>{$item.user_permisos}</i></p>
          <p>
            <a role="button" href="http://localhost/maquinarias/admin/usuarios/modificar/{$item.id_usuario}" class="btn btn-primary">Modificar</a>
            <a role="button" href="http://localhost/maquinarias/admin/usuarios/borrar/{$item.id_usuario}" class="btn btn-danger">Eliminar</a>
          </p>
        </li>
        {/foreach}
      {else}
         <div id="alert" class="alert alert-danger" role="alert" >Sin Usuarios</div>
      {/if}
      </ul>
    </div>
  </div>
</section>
