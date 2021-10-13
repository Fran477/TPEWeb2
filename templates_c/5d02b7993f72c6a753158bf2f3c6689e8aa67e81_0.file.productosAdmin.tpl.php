<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:20:11
  from 'C:\xampp\htdocs\TpeWeb2\templates\productosAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166263bf37990_62332442',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d02b7993f72c6a753158bf2f3c6689e8aa67e81' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\productosAdmin.tpl',
      1 => 1634082671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6166263bf37990_62332442 (Smarty_Internal_Template $_smarty_tpl) {
?>  <figure class="text-center"><h2 class="display-6" class="titulo-productos">Productos cargados en la base de datos</h2></figure>
<ul class="list-group list-group-flush">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
        <li class="list-group-item">Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
        <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
        <li class="list-group-item">Stock: <?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</li>
        <li class="list-group-item"><img width=25% src=<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
></li>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="collapse navbar-collapse " id="navbarNav" >
    <ul class="navbar-nav">
            
            <a class="navbar-brand" href="detalles/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-filter-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path><path d="M6 11.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
            </svg>Detalles</button></a>
            
            <a  class="navbar-brand"href="mostrarEditarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
"><button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16"><path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"></path></svg>
            Editar</button></a>
            
            <a class="navbar-brand" href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
"><button type="button" class="btn btn-outline-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16"><path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"></path><path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"></path>
            </svg>Borrar</button></a>
    </nav>
    </div>
    </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
