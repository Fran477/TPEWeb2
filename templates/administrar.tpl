{include file= 'templates/header.tpl'}

<figure class="text-center"><h1 class="display-6">Agregar un producto a la base de datos</h1></figure>
<nav class="navbar navbar-light bg-light">
<form class="from-agregar" action="agregarProducto" method="POST">
    <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
    <input class="form-control mr-sm-2"  type="number" name="precio" id="precio" placeholder="Precio" required>
    <input class="form-control mr-sm-2"  type="text" name="descripcion" id="descripcion" placeholder="Ingrese una descripcion para el producto" required>
    <input class="form-control mr-sm-2"  type="number" name="stock" id="stock" placeholder="Stock" required>
    <input  class="form-control mr-sm-2" type="text" name="imagen" id="imagen" placeholder="Ingrese una url de imagen" required>
    <select name="id_categoria">  
        {foreach from=$categorias item=$categoria}
            <option value="{$categoria->id_categoria}"> {$categoria->nombre}</option>
        {/foreach}
    </select> 
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Enviar">
</form>
</nav>

{include file= 'templates/productosAdmin.tpl'}

{include file= 'templates/footer.tpl'}