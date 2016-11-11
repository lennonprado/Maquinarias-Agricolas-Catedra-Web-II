<section class="container">
  <div class="row">
    <h4>Nueva usuario</h4>
    <form method="post" action="">
      <div class="form-group">
        <label for="mar_nombre">Usuario:</label>
        <input type="email" class="form-control"  name="user_name" placeholder="Nombre de la usuario">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Contraseña:</label>
        <input type="text" class="form-control" name="user_pass" placeholder="Descripcion corta de la usuario">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Permisos:</label>
        <select name="user_permisos" id="user_permisos">
           <option value="Administrador">Administrador</option>
           <option value="Usuario">Usuario</option>
           <option value="Dueño">Dueño</option>
        </select>
      </div>
      <button type="submit" class="btn btn-default">Guardar</button>
    </form>
  </div>
</section>
