<form action="/maquinarias/admin/productos/modificar/{$unidad.id_producto}">
  <div class="form-group">
    <label for="prod_nombre">Categoria</label>
    <select>
      {foreach from=$categorias item=categoria}
        <option>{$categoria.cat_nombre}</option
      {/foreach}
    </select>
  </div>
  <div class="form-group">
    <label for="prod_nombre">Nombre</label>
    <input type="text" class="form-control" id="prod_nombre" placeholder="Nombre del producto" value="{$unidad.prod_nombre}" />
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">prod_descripcion</label>
    <textarea></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputFile">File input</label>
    <input type="file" id="exampleInputFile">
    <p class="help-block">Example block-level help text here.</p>
  </div>
  <div class="checkbox">
    <label>
      <input type="checkbox"> Check me out
    </label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


<a href="#" title="{$usado.prod_nombre}" class="jsUnidad">{$usado.prod_nombre}</a>
</h3>
<ul class="features">
  <li><span>Marca</span> : {$usado.mar_nombre}</li>
  <li><span>Modelo</span> : {$usado.prod_modelo}</li>
  <li><span>Estado</span> : {$usado.prod_estado}</li>
  <li><span>Año</span> : {$usado.prod_anio}</li>
</ul>
<ul class="price">
  <li><span>Precio</span> $  {$usado.prod_precio}</li>
