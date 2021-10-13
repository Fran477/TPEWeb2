{include file= 'templates/header.tpl'}

   <figure class="text-center"><h1 class="display-6">Categorias</h1></figure>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Ver</th>
        </tr>
    </thead>
    <tbody>
    {foreach from=$categorias item=$categoria}
        <tr>
        <td scope="row"><h6>{$categoria->nombre}<h6></td>
        <td scope="row">Descripcion de la categoria:{$categoria->descripcion}</td>
        <td><a class="navbar-brand" href="productos_categoria/{$categoria->id_categoria}"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path></svg>
                {$categoria->nombre}
              </button></a><td>
        </tr>
    {/foreach}
    </tbody>
</table>
{include file= 'templates/footer.tpl'}