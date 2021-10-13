<?php
/* Smarty version 3.1.39, created on 2021-10-12 19:06:47
  from 'C:\xampp\htdocs\prueba2\templates\administrarBaseDeDatos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165c0a78ff0b8_30718723',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb44c997b673e42bbc12305a5d87e38d02761ffb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\administrarBaseDeDatos.tpl',
      1 => 1634058394,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/listarProductosEditables.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165c0a78ff0b8_30718723 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<a href="home">Regresar al Home</a>
<h1>Agregar un producto a la base de datos</h1>
<form action="agregarProducto" method="POST">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre" required>
    <input type="number" name="precio" id="precio" placeholder="Precio" required>
    <input type="text" name="descripcion" id="descripcion" placeholder="Ingrese una descripcion para el producto" required>
    <input type="number" name="stock" id="stock" placeholder="Stock" required>
    <input type="text" name="imagen" id="imagen" placeholder="Ingrese una url de imagen" required>
    <select name="id_categoria">  
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
            <option value="<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"> <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</option>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </select> 
    <input type="submit" value="Enviar">
</form>

<?php $_smarty_tpl->_subTemplateRender('file:templates/listarProductosEditables.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
