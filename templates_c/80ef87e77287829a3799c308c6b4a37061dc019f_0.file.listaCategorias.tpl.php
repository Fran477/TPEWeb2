<?php
/* Smarty version 3.1.39, created on 2021-10-12 18:06:27
  from 'C:\xampp\htdocs\prueba2\templates\listaCategorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165b2831f1dd1_91439530',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ef87e77287829a3799c308c6b4a37061dc019f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\listaCategorias.tpl',
      1 => 1634054778,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165b2831f1dd1_91439530 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <h1>Categorias</h1>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
    
        <a href="productos_categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><li><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
</li></a>
        <li>Descripcion de la categoria:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</li>
    
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
