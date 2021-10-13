<?php require_once "./Model/productosModel.php"; require_once "./View/productosView.php"; require_once "./Model/categoriasModel.php"; require_once "./Helpers/authHelper.php";

class productosController{
    private $model;
    private $view;
    private $modelCategorias;
    private $authHelper;

    function __construct(){
        
        $this->model = new productosModel();
        $this->view = new productosView();
        $this->modelCategorias = new categoriasModel();
        $this->authHelper = new AuthHelper();}

    function mostrarHome(){
        $productos = $this->model->getProductos();
        
        $this->view->showHome($productos);}

    function Detalles_Producto($id){
        
        $producto = $this->model->getProducto($id);
        
        $this->view->detalles($producto);}

    function productos_categoria($id){
        $productos_categoria = $this->model->getProductos_categoria($id);
        
        $this->view->productos_categoria($productos_categoria);}

    function FormularioAgregarProducto(){
        $this->authHelper->checkloggedIn();
        
        $categorias = $this->modelCategorias->getCategorias();
        $productos= $this->model->getProductos();
        
        $this->view->FormularioAgregarProducto($categorias, $productos);}

   
    function agregarProducto(){
        
        $this->authHelper->checkloggedIn();
        $this->model->agregarProducto($_POST['nombre'],  $_POST['precio'], $_POST['descripcion'], $_POST['stock'], $_POST['imagen'], $_POST['id_categoria']);
        $this->view->redirigirAdministracion();}

    
    function borrarProducto($id){
        
        $this->authHelper->checkloggedIn();
        $this->model->borrarProducto($id);
        $this->view->redirigirAdministracion();}

    
    function FormularioEditarProducto($id){
        
        $this->authHelper->checkloggedIn();
        
        $categorias = $this->modelCategorias->getCategorias();
        $producto = $this->model->getProducto($id);
        
        $this->view->FormularioEditarProducto($id, $categorias, $producto);}

     function editarProducto($id_producto){
        
        $this->authHelper->checkloggedIn();
        $this->model->editarProducto($_POST['nombre'],  $_POST['precio'], $_POST['descripcion'], $_POST['stock'], $_POST['imagen'], $_POST['id_categoria'], $id_producto);
        $this->view->redirigirAdministracion();}
     
        
    }
  
