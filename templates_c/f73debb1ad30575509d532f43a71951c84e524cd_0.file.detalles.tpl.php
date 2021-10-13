<?php
/* Smarty version 3.1.39, created on 2021-10-13 01:23:22
  from 'C:\xampp\htdocs\prueba2\templates\detalles.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616618ea4186d4_34419576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f73debb1ad30575509d532f43a71951c84e524cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\detalles.tpl',
      1 => 1634081000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616618ea4186d4_34419576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<figure class="text-center"><h1 class="display-6">Detalles del producto seleccionado</h1></figure>
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
