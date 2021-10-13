<?php
/* Smarty version 3.1.39, created on 2021-10-12 19:15:36
  from 'C:\xampp\htdocs\prueba2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165c2b88ed2b7_83179195',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bba8d6f9d770ca4f9a1e6ae7e5d1b097ec7f1872' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\home.tpl',
      1 => 1634058917,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/productos.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6165c2b88ed2b7_83179195 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/productos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
