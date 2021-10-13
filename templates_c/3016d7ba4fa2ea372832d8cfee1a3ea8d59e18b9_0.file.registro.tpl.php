<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:12:02
  from 'C:\xampp\htdocs\prueba2\templates\registro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616624529675a6_36907172',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3016d7ba4fa2ea372832d8cfee1a3ea8d59e18b9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\registro.tpl',
      1 => 1634083914,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_616624529675a6_36907172 (Smarty_Internal_Template $_smarty_tpl) {
?>  <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
  <div class="container-login">
  <form action="registrarse" method="POST" class="from-login">
      <h6>Usuario</h6>
      <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre"  required>
      <h6>Contraseña</h6>
      <input class="form-control mr-sm-2" type="password" name="clave" id="clave" required>
      <input class="btn btn-outline-success my-2 my-sm-1" type="submit" value="registrarse" />
  </form>
 </div>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
