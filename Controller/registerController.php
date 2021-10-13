<?php
require_once "./Model/registerModel.php"; require_once "./View/registerView.php";

class registerController{

    private $model;
    private $view;

    function __construct(){
    
        $this->model = new registerModel();
        $this->view = new registerView();}

    function registroDeUsuario(){

        $this->view->registroDeUsuario();}

    function registrar(){
        
        $usuario = $_POST['nombre'];
        $contraseña = password_hash($_POST['clave'], PASSWORD_BCRYPT);
    
        $this->model->registrar($usuario, $contrase);
        $this->view->redirigirHome();}

}
