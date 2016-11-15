
<section class="container">
  <div class="row">
    <h4>Modificar Usuario</h4>
    {if isset($mensaje)}
      <div id="alert" class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}
    <form action="" method="post">
      <div class="form-group">
        <label for="cat_nombre">User:</label>
        <input type="text" class="form-control" id="user_name" name="user_name" required="" placeholder="Nombre de la categoria" value="{$user_name}">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Permisos:</label>
        <select name="user_permisos" id="user_permisos">
           <option value="Administrador" {if $user_permisos=='Administrador'} selected {/if} >Administrador</option>
           <option value="Usuario" {if $user_permisos=='Usuario'} selected {/if} >Usuario</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Modificar</button>
    </form>
  </div>
</section>
