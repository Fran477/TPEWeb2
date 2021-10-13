{include file= 'templates/header.tpl'}

<figure class="text-center"><h1 class="display-6">Detalles del producto seleccionado</h1></figure>
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