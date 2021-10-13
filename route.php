<?php
require_once 'Controller/productosController.php';
require_once 'Controller/categoriasController.php';
require_once 'Controller/registerController.php';
require_once 'Controller/loginController.php';

define('BASE_URL', '//' . $_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']) . '/');

if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home';
}

$params = explode('/', $action);

$productosController = new productosController();
$categoriasController = new categoriasController();
$registerController = new registerController();
$loginController = new loginController();

switch ($params[0]) {
//<------HOME----->
    case 'home':
        $productosController->mostrarHome();
        break;
//<----redireccion de los detalles de los produtos en el home---->   
    case 'detalles':
        $productosController->Detalles_Producto($params[1]);
        break;
//<----redireccion de las categorias---->
    case 'categorias':
        $categoriasController->categorias();
        break;
//<----filtro de productos por categoria----->
    case 'productos_categoria':
        $productosController->productos_categoria($params[1]);
        break;
//<----requerimiento funcional agregar, borrar y editar---->
    case 'agregarProducto':
        $productosController->agregarProducto();
        break;
    case 'borrarProducto':
        $productosController->borrarProducto($params[1]);
        break;
    case 'mostrarEditarProducto':
        $productosController->FormularioEditarProducto($params[1]);
        break;
    case 'editarProducto':
        $productosController->editarProducto($params[1]);
        break;
//<----Registro, Login y Logout de Usuario para administrar la base de datos----->
    case 'registroDeUsuario':
        $registerController->registroDeUsuario();
        break;
    case 'registrarse':
        $registerController->registrar();
        break;
    case 'loginUser':
        $loginController->loginUser();
        break;
    case 'login':
        $loginController->verificacion();
        break;
    case 'logout':
        $loginController->logout();
        break;
//<-----Administracion de bases de datos--------->
    case 'administracion':
        $productosController->FormularioAgregarProducto();
        break;

    
    //<---no funciona---->
    // case 'agregarCategorias':
    //         $categoriasController->agregarCategorias();
    //         break;

    default:
        echo ('404 Page not found');
        break;
}
