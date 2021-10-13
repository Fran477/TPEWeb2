<?php
/* Smarty version 3.1.39, created on 2021-10-12 06:38:23
  from 'C:\xampp\htdocs\prueba2\templates\detallesProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165113fc96d74_53511330',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1f3e80482ec85ccfe6e7b7fbadf873bb05f183d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\detallesProducto.tpl',
      1 => 1634013501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165113fc96d74_53511330 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<h1 >Detalles del producto <?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
</h1>
<ul>
    <li>Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
    <li>Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
    <li>Stock disponible: <?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</li>
    <li>Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
    <li>id_categoria:<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_categoria;?>
</li>
   
    
</ul>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
