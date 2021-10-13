<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class productosView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }

    function showHome($productos)
    {
        $this->smarty->assign('productos', $productos);
        $this->smarty->display('templates/home.tpl');
    }

    function detalles($producto)
    {
        $this->smarty->assign('producto', $producto);
        $this->smarty->display('templates/detalles.tpl');
    }

    function productos_categoria($productos_categoria)
    {
        $this->smarty->assign('productos_categoria', $productos_categoria);
        $this->smarty->display('templates/productos_categoria.tpl');
    }

    function FormularioAgregarProducto($categorias, $prodItems)
    {
        $this->smarty->assign("categorias", $categorias);
        $this->smarty->assign("productos", $prodItems);
        $this->smarty->display('templates/administrar.tpl');
    }

    function redirigirAdministracion()
    {
        header("Location: " . BASE_URL . "administracion");
    }

    function FormularioEditarProducto($productos, $categorias, $producto)
    {
        $this->smarty->assign("producto", $producto);
        $this->smarty->assign("categorias", $categorias);
        $this->smarty->assign("productos", $productos);
        $this->smarty->display('templates/editarProducto.tpl');
    }
}
