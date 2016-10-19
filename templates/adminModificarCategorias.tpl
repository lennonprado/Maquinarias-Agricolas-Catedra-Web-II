
<section class="container">
  <div class="row">
    <h4>Nueva categorias</h4>
    <form>
      <div class="form-group">
        <label for="cat_nombre">Categoria:</label>
        <input type="text" class="form-control" id="cat_nombre" placeholder="Nombre de la categoria" value="{$cat_nombre}">
      </div>
      <div class="form-group">
        <label for="cat_descripcion">Descripción:</label>
        <input type="text" class="form-control" id="cat_descripcion" placeholder="Descripcion corta de la categoria" value="{$cat_descripcion}">
      </div>
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</section>
