<?php
/* Smarty version 3.1.39, created on 2021-10-12 19:07:25
  from 'C:\xampp\htdocs\prueba2\templates\mostrarEditarProducto.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165c0cdc7a555_02418916',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ede6006050a537cc6eb67971e7858da10743e3f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\mostrarEditarProducto.tpl',
      1 => 1634058372,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165c0cdc7a555_02418916 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<form action="editarProducto/<?php echo $_smarty_tpl->tpl_vars['productos']->value;?>
" method="POST">
    <input type="hidden" name="id_productos" value="<?php echo $_smarty_tpl->tpl_vars['productos']->value;?>
">
    <input type="text" name="nombre" id="nombre"  value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
" required>
    <input type="number" name="precio" id="precio" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->precio;?>
" required >
    <input type="text" name="descripcion" id="descripcion" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
" required>
    <input type="number" name="stock" id="stock" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->stock;?>
" required>
    <input type="text" name="imagen" id="imagen" value="<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
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
    <input type="submit" value="Editar">
</form>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
