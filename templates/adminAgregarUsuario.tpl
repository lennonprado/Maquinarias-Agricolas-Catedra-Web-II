<section class="container">
  <div class="row">
    <h4>Nuevo usuario</h4>
    {if isset($mensaje)}
      <div id="alert" class="alert alert-{$tipoMensaje}" role="alert">{$mensaje}</div>
    {/if}
    <form method="post" action="">
      <div class="form-group">
        <label for="mar_nombre">Usuario:</label>
        <input type="email" class="form-control"  name="user_name" id="user_name" required="" placeholder="Nombre de la usuario">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Contraseña:</label>
        <input type="text" class="form-control" name="user_pass" id="user_pass" required="" placeholder="Contrasña del usuario">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Permisos:</label>
        <select name="user_permisos" id="user_permisos">
           <option value="Administrador">Administrador</option>
           <option value="Usuario">Usuario</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Guardar</button>
    </form>
  </div>
</section>
