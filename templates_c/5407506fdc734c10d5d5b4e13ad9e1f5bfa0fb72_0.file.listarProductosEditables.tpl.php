<?php
/* Smarty version 3.1.39, created on 2021-10-12 19:07:10
  from 'C:\xampp\htdocs\prueba2\templates\listarProductosEditables.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165c0be849223_15881007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5407506fdc734c10d5d5b4e13ad9e1f5bfa0fb72' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\listarProductosEditables.tpl',
      1 => 1634058427,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165c0be849223_15881007 (Smarty_Internal_Template $_smarty_tpl) {
?>  <h2 class="titulo-productos">Listado de todos los productos disponibles: </h2>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
        <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
        <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</li>
        <img width=25% src=<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
>
        <li><?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
</li>
            <a href="detalles/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
">Detalles</a>
            <a href="mostrarEditarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
">Editar</a>
            <a href="borrarProducto/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
">Borrar</a>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php }
}
