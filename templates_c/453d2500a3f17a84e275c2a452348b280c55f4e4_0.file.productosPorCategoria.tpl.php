<?php
/* Smarty version 3.1.39, created on 2021-10-10 05:51:42
  from 'C:\xampp\htdocs\prueba2\templates\productosPorCategoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6162634e62e639_90836372',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '453d2500a3f17a84e275c2a452348b280c55f4e4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\productosPorCategoria.tpl',
      1 => 1633837900,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6162634e62e639_90836372 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <a href="home">Volver al Home</a>
    <h1> Productos de categoria </h1>
<ul>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productosPorCategoria']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            
            <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
            <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
            <li>Stock: <?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</li>
            <li>Precio: <?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
            <img  width=25% src=<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
>
            
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
