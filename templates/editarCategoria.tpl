{include file= 'templates/header.tpl'}


<nav class="navbar navbar-light bg-light">
<form class="from-agregar" action="editarCategoria/{$id}" method="POST">
    <input class="form-control mr-sm-2" type="hidden" name="id_productos" value="{$id}">
    <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre"  value="{$categorias->nombre}" required>
    <input class="form-control mr-sm-2" type="text" name="descripcion" id="descripcion" value="{$categorias->descripcion}" required>

    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Editar">
</form>
</nav>
<figure class="text-center"><h1 class="display-6">Categoria a Modificar</h1></figure>
    <div class="div-editar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Nombre: {$categorias->nombre}</li>
        <li class="list-group-item">Descripcion: {$categorias->descripcion}</li>  
    </ul>
<div>



{include file= 'templates/footer.tpl'}