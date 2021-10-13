<?php
/* Smarty version 3.1.39, created on 2021-10-13 01:42:10
  from 'C:\xampp\htdocs\prueba2\templates\categorias.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61661d5282f769_31470547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '476cd954ef73173593d24d8c78a63e83e1c161cd' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\categorias.tpl',
      1 => 1634082128,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_61661d5282f769_31470547 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender('file:templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

   <figure class="text-center"><h1 class="display-6">Categorias</h1></figure>
    <table class="table">
    <thead>
        <tr>
            <th scope="col">Categoria</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Ver</th>
        </tr>
    </thead>
    <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categorias']->value, 'categoria');
$_smarty_tpl->tpl_vars['categoria']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['categoria']->value) {
$_smarty_tpl->tpl_vars['categoria']->do_else = false;
?>
        <tr>
        <td scope="row"><h6><?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>
<h6></td>
        <td scope="row">Descripcion de la categoria:<?php echo $_smarty_tpl->tpl_vars['categoria']->value->descripcion;?>
</td>
        <td><a class="navbar-brand" href="productos_categoria/<?php echo $_smarty_tpl->tpl_vars['categoria']->value->id_categoria;?>
"><button type="button" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square" viewBox="0 0 16 16"><path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"></path><path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"></path></svg>
                <?php echo $_smarty_tpl->tpl_vars['categoria']->value->nombre;?>

              </button></a><td>
        </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender('file:templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
