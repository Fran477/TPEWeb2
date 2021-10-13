<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:20:04
  from 'C:\xampp\htdocs\TpeWeb2\templates\home.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616626341c3ef0_50276044',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66c11c50e06f1e91a4c057e91f30059fb603cad1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\home.tpl',
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
function content_616626341c3ef0_50276044 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/productos.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
