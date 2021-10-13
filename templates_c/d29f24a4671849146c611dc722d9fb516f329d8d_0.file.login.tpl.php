<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:11:55
  from 'C:\xampp\htdocs\prueba2\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6166244be66d42_21464522',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd29f24a4671849146c611dc722d9fb516f329d8d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\login.tpl',
      1 => 1634083901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_6166244be66d42_21464522 (Smarty_Internal_Template $_smarty_tpl) {
?> <?php $_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container-login">
    <form action="login" method="POST" class="from-login" >
        <h6>Usuario</h6>
        <input class="form-control mr-sm-2" type="text" name="nombre" id="nombre" required>
        <h6>Contraseña</h6>
        <input class="form-control mr-sm-2" type="password" name="clave" id="clave" required>
        <input class="btn btn-outline-success my-2 my-sm-1" type="submit" value="login" />
        </form>
    <h4><?php echo $_smarty_tpl->tpl_vars['rechazado']->value;?>
</h4>
        <a  href="registroDeUsuario/"><button type="button" class="btn btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"></path><path d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"></path><path d="M9.5 1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-3a.5.5 0 0 1-.5-.5v-1a.5.5 0 0 1 .5-.5h3zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"></path></svg>Registro</button></a>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
