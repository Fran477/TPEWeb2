{include file= 'templates/header.tpl'}

<figure class="text-center"><h1 class="display-6">Productos por categoria</h1></figure>
<ul class="list-group list-group-flush">
    {foreach from=$productos_categoria item=$producto}
            
    <li class="list-group-item">Nombre: {$producto->nombre}</li>
    <li class="list-group-item">Descripcion: {$producto->descripcion}</li>
    <li class="list-group-item">Stock: {$producto->stock}</li>
    <li class="list-group-item">Precio: ${$producto->precio}</li>
    <li class="list-group-item"><img  width=25% src={$producto->imagen}></li>
       
    {/foreach}
</ul>
{include file= 'templates/footer.tpl'}