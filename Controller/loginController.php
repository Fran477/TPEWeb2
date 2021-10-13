<?php
require_once "./Model/userModel.php"; require_once "./View/loginView.php"; require_once "./View/productosView.php";

class loginController
{

    private $model;
    private $view;

    function __construct(){
        
        
        $this->model = new userModel();
        $this->view = new loginView();}

    function loginUser(){
        
        $this->view->loginUser();}

    
    
    function verificacion(){
        
        if (!empty($_POST['nombre']) && !empty($_POST['clave'])) {
        
            $usuario = $_POST['nombre'];
            $contraseña = $_POST['clave'];
            
            // Obtengo el usuario de la base de datos
            $nombre = $this->model->obtenerUsuarios($usuario);
                
                // Si el usuario existe y las contraseñas coinciden
                if ($nombre && password_verify($contraseña, $nombre->contraseña)) {
                    session_start();

                    $_SESSION["nombre"] = $usuario;

                    $this->view->redirigirHome();}
                else {
                    $this->view->loginUser('Tus datos son incorrectos, vuelve a intentarlo');}
            }
    }

    function logout(){
        
        session_start();
        session_destroy();
        $this->view->loginUser("Adios :)");}


}
