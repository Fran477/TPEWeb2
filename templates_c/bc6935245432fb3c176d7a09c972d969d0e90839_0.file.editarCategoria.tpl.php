<?php
/* Smarty version 3.1.39, created on 2021-10-13 21:02:07
  from 'C:\xampp\htdocs\prueba2\templates\editarCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61672d2f978b70_62327710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc6935245432fb3c176d7a09c972d969d0e90839' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\editarCategoria.tpl',
      1 => 1634151722,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61672d2f978b70_62327710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<nav class="navbar navbar-light bg-light">
<form class="from-agregar" action="editarCategoria/<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
" method="POST">
    <input class="form-control mr-sm-2" type="hidden" name="id_productos" value="<?php echo $_smarty_tpl->tpl_vars['id']->value;?>
">
    <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre"  value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->nombre;?>
" required>
    <input class="form-control mr-sm-2" type="text" name="descripcion" id="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['categorias']->value->descripcion;?>
" required>

    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Editar">
</form>
</nav>
<figure class="text-center"><h1 class="display-6">Categoria a Modificar</h1></figure>
    <div class="div-editar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['categorias']->value->nombre;?>
</li>
        <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['categorias']->value->descripcion;?>
</li>  
    </ul>
<div>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
