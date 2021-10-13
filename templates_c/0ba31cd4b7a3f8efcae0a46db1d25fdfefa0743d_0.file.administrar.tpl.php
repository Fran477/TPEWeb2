<?php
/* Smarty version 3.1.39, created on 2021-10-13 00:56:37
  from 'C:\xampp\htdocs\prueba2\templates\administrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616612a5c84c68_32516545',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0ba31cd4b7a3f8efcae0a46db1d25fdfefa0743d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\administrar.tpl',
      1 => 1634079396,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/productosAdmin.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616612a5c84c68_32516545 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<figure class="text-center"><h1 class="display-6">Agregar un producto a la base de datos</h1></figure>
<nav class="navbar navbar-light bg-light">
<form class="from-agregar" action="agregarProducto" method="POST">
    <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre" placeholder="Nombre" required>
    <input class="form-control mr-sm-2"  type="number" name="precio" id="precio" placeholder="Precio" required>
    <input class="form-control mr-sm-2"  type="text" name="descripcion" id="descripcion" placeholder="Ingrese una descripcion para el producto" required>
    <input class="form-control mr-sm-2"  type="number" name="stock" id="stock" placeholder="Stock" required>
    <input  class="form-control mr-sm-2" type="text" name="imagen" id="imagen" placeholder="Ingrese una url de imagen" required>
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
    <input class="btn btn-outline-success my-2 my-sm-0" type="submit" value="Enviar">
</form>
</nav>

<?php $_smarty_tpl->_subTemplateRender('file:templates/productosAdmin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
