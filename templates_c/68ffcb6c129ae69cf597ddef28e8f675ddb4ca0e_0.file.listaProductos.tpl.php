<?php
/* Smarty version 3.1.39, created on 2021-10-12 17:52:40
  from 'C:\xampp\htdocs\prueba2\templates\listaProductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6165af480472e8_90501422',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '68ffcb6c129ae69cf597ddef28e8f675ddb4ca0e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\prueba2\\templates\\listaProductos.tpl',
      1 => 1634053952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6165af480472e8_90501422 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <h2 class="display-7"  class="titulo-productos">Listado de todos los productos disponibles: </h2>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
            <ul class="list-group" width=25<?php echo '%>';?>

            <li class="list-group-item"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</li>
            <img  width=25% class="list-group-item" src=<?php echo $_smarty_tpl->tpl_vars['producto']->value->imagen;?>
>
            <li class="list-group-item" class="detalle-producto"><a href="detalles/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
">Detalles</a> </li>
            </ul>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table>
<?php }
}
