<section class="container">
  <div class="row">
    <h4>Nueva marca</h4>
    <form method="post" action="">
      <div class="form-group">
        <label for="mar_nombre">Marca:</label>
        <input type="text" class="form-control"  name="mar_nombre" placeholder="Nombre de la marca" value="{$mar_nombre}">
      </div>
      <div class="form-group">
        <label for="mar_descripcion">Descripción:</label>
        <input type="text" class="form-control" name="mar_descripcion" placeholder="Descripcion corta de la marca" value="{$mar_descripcion}">
      </div>
      <button type="submit" class="btn btn-default">Guardar</button>
    </form>
  </div>
</section>
