<?php
require_once "./Model/categoriasModel.php"; require_once "./View/categoriasView.php"; require_once "./Helpers/authHelper.php";

class categoriasController{
    
    private $model;
    private $view;

    function __construct(){
        
        $this->model = new categoriasModel();
        $this->view = new categoriasView();
        $this->authHelper = new AuthHelper();}

    function categorias(){
        $categorias = $this->model->getCategorias();
        
        $this->view->mostrarCategorias($categorias);}
    
    

  
     function agregarCategorias(){
        
        $this->authHelper->checkloggedIn();
        $this->model->agregarCategorias($_POST['nombre'],$_POST['descripcion']);
        $this->view->redirigirAdministracion(); }
    
    
    function FormularioEditarCategoria($id){
        
            $this->authHelper->checkloggedIn();
            $categorias = $this->model->getCategoria($id);
            $this->view->FormularioEditarCategoria($id, $categorias);}
    
    function editarCategoria($id_categoria){
            
            $this->authHelper->checkloggedIn();
            $this->model->editarCategoria($_POST['nombre'], $_POST['descripcion'], $id_categoria);
            $this->view->redirigirAdministracion();}
    
  //<-----------Solo deja borrar categorias que no tengan productos asociados------>
//<-----------falta arreglar-------------->   
    function borrarCategoria($id){
        
                $this->authHelper->checkloggedIn();
                $this->model->borrarCategoria($id);
                $this->view->redirigirAdministracion();}
}          
        
