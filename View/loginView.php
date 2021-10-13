<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class loginView
{
    private $smarty;

    function __construct()
    {
        $this->smarty = new Smarty();
    }


    function loginUser($rechazado = '')
    {
        $this->smarty->assign('rechazado', $rechazado );
        $this->smarty->display('templates/login.tpl');
    }

    function redirigirHome()
    {
        header("Location: " . BASE_URL . "home");
    }
}
