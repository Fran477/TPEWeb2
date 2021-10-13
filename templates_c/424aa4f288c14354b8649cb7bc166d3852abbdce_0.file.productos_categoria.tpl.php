<?php
/* Smarty version 3.1.39, created on 2021-10-13 01:56:21
  from 'C:\xampp\htdocs\prueba2\templates\productos_categoria.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616620a5ce0fb7_83125823',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '424aa4f288c14354b8649cb7bc166d3852abbdce' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\productos_categoria.tpl',
      1 => 1634082694,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616620a5ce0fb7_83125823 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<figure class="text-center"><h1 class="display-6">Productos por categoria</h1></figure>
<ul class="list-group list-group-flush">
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos_categoria']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            
    <li class="list-group-item">Nombre: <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
    <li class="list-group-item">Descripcion: <?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</li>
    <li class="list-group-item">Stock: <?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
</li>
    <li class="list-group-item">Precio: $<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
</li>
    <li class="list-group-item"><img  width=25% src=<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
></li>
       
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</ul>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
