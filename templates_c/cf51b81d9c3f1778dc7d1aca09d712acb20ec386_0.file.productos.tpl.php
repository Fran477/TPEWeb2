<?php
/* Smarty version 3.1.39, created on 2021-10-13 02:20:04
  from 'C:\xampp\htdocs\TpeWeb2\templates\productos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61662634280154_09091903',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cf51b81d9c3f1778dc7d1aca09d712acb20ec386' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TpeWeb2\\templates\\productos.tpl',
      1 => 1634070454,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61662634280154_09091903 (Smarty_Internal_Template $_smarty_tpl) {
?>    <link rel="stylesheet" href="css/style.css">
    <h2 class="titulo">Productos disponibles</h2>
    <div class="div-table">
    <table class="table table-bordered">
     <thead class="thead">
        <tr>
            <td scope="col">Nombre</td>
            <td scope="col">Descripcion</td>
            <td scope="col">Mas Informacion</td>
        </tr>
     </thead>
       <tbody>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
$_smarty_tpl->tpl_vars['producto']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
$_smarty_tpl->tpl_vars['producto']->do_else = false;
?>
           <tr class="contenedor-home"> 
                <td scope="row"> <?php echo $_smarty_tpl->tpl_vars['producto']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['producto']->value->descripcion;?>
</td>
                <td class="detalle-producto"><a href="detalles/<?php echo $_smarty_tpl->tpl_vars['producto']->value->id_productos;?>
">Detalles</a> </td>
            <tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>  
     </tbody>
</table>
</div>
<?php }
}
