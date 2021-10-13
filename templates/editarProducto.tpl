{include file= 'templates/header.tpl'}
<link rel="stylesheet" href="css/style.css">

<nav class="navbar navbar-light bg-light">
<form class="from-agregar" action="editarProducto/{$productos}" method="POST">
    <input class="form-control mr-sm-2" type="hidden" name="id_productos" value="{$productos}">
    <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre"  value="{$producto->nombre}" required>
    <input class="form-control mr-sm-2" type="number" name="precio" id="precio" value="{$producto->precio}" required >
    <input class="form-control mr-sm-2" type="text" name="descripcion" id="descripcion" value="{$producto->descripcion}" required>
    <input class="form-control mr-sm-2" type="number" name="stock" id="stock" value="{$producto->stock}" required>
    <input class="form-control mr-sm-2" type="text" name="imagen" id="imagen" value="{$producto->imagen}" required>
    <select name="id_categoria">
        {foreach from=$categorias item=$categoria}
            <option value="{$categoria->id_categoria}">{$categoria->nombre}</option>
        {/foreach}
    </select>
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Editar">
</form>
</nav>
    <figure class="text-center"><h1 class="display-6">Producto a Editar</h1></figure>
    <div class="div-editar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Nombre: {$producto->nombre}</li>
        <li class="list-group-item">Descripcion: {$producto->descripcion}</li>
        <li class="list-group-item">Stock disponible: {$producto->stock}</li>
        <li class="list-group-item">Precio: ${$producto->precio}</li>
        <li class="list-group-item"><img class="img-producto" src={$producto->imagen}></li>  
    </ul>
<div>



{include file= 'templates/footer.tpl'}