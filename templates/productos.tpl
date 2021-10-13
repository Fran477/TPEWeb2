    <link rel="stylesheet" href="css/style.css">
    <h2 class="titulo">Productos disponibles</h2>
    <div class="div-table">
    <table class="table table-bordered">
     <thead class="thead">
        <tr>
            <td scope="col">Nombre</td>
            <td scope="col">Descripcion</td>
            <td scope="col">Mas Informacion</td>
        </tr>
     </thead>
       <tbody>
    {foreach from=$productos item=$producto}
           <tr class="contenedor-home"> 
                <td scope="row"> {$producto->nombre}</td>
                <td>{$producto->descripcion}</td>
                <td class="detalle-producto"><a href="detalles/{$producto->id_productos}">Detalles</a> </td>
            <tr>
    {/foreach}  
     </tbody>
</table>
</div>
