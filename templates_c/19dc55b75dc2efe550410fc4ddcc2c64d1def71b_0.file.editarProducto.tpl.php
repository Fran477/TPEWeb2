<?php
/* Smarty version 3.1.39, created on 2021-10-13 01:12:31
  from 'C:\xampp\htdocs\prueba2\templates\editarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166165f145981_79206865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '19dc55b75dc2efe550410fc4ddcc2c64d1def71b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\editarProducto.tpl',
      1 => 1634079617,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6166165f145981_79206865 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<link rel="stylesheet" href="css/style.css">

<nav class="navbar navbar-light bg-light">
<form class="from-agregar" action="editarProducto/<?php echo $_smarty_tpl->tpl_vars['productos']->value;?>
" method="POST">
    <input class="form-control mr-sm-2" type="hidden" name="id_productos" value="<?php echo $_smarty_tpl->tpl_vars['productos']->value;?>
">
    <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre"  value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" required>
    <input class="form-control mr-sm-2" type="number" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" required >
    <input class="form-control mr-sm-2" type="text" name="descripcion" id="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
" required>
    <input class="form-control mr-sm-2" type="number" name="stock" id="stock" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
" required>
    <input class="form-control mr-sm-2" type="text" name="imagen" id="imagen" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
" required>
    <select name="id_categoria">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select>
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Editar">
</form>
</nav>
    <figure class="text-center"><h1 class="display-6">Producto a Editar</h1></figure>
    <div class="div-editar">
    <ul class="list-group list-group-flush">
        <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
        <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
        <li class="list-group-item">Stock disponible: <?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</li>
        <li class="list-group-item">Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
        <li class="list-group-item"><img class="img-producto" src=<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
></li>  
    </ul>
<div>



<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
