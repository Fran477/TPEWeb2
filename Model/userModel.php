<?php

class userModel
{
    private $db;

    function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_deportes;charset=utf8', 'root', '');
    }

    function obtenerUsuarios($nombre)
    {
        $query = $this->db->prepare('SELECT * FROM usuario WHERE nombre=?');
        $query->execute([$nombre]);
        $usuario =  $query->fetch(PDO::FETCH_OBJ);
        return $usuario;
    }
}
