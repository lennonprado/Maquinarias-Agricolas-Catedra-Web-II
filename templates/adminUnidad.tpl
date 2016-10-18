<form>
  <div class="form-group">
    <label for="prod_nombre">Nombre</label>
    <input type="email" class="form-control" id="prod_nombre" placeholder="Nombre del producto">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
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


<a href="#" title="{$usado.}" class="jsUnidad">{$usado.prod_nombre}</a>
</h3>
<ul class="features">
  <li><span>Marca</span> : {$usado.mar_nombre}</li>
  <li><span>Modelo</span> : {$usado.prod_modelo}</li>
  <li><span>Estado</span> : {$usado.prod_estado}</li>
  <li><span>Año</span> : {$usado.prod_anio}</li>
</ul>
<ul class="price">
  <li><span>Precio</span> $  {$usado.prod_precio}</li>
