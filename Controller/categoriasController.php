<?php
require_once "./Model/categoriasModel.php"; require_once "./View/categoriasView.php";

class categoriasController{
    
    private $model;
    private $view;

    function __construct(){
        
        $this->model = new categoriasModel();
        $this->view = new categoriasView();}

    function categorias(){
        $categorias = $this->model->getCategorias();
        
        $this->view->mostrarCategorias($categorias);}
    
    }

    //<---no funciona---->
    // function agregarCategorias(){
        
    //     $this->authHelper->checkloggedIn();
    //     $this->model->agregarCategorias($_POST['id_categoria'], $_POST['nombre'],$_POST['descripcion']);
    //     $this->view->redirigirAdministracion();
    // }
