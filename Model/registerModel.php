<?php

class registerModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_deportes;charset=utf8', 'root', '');
    }

    function registrar($usuario, $contraseña)
    {
        $query = $this->db->prepare("INSERT INTO usuario(nombre, contraseña) VALUES(?, ?)");
        $query->execute(
            array($usuario, $contraseña)
        );
    }
}
