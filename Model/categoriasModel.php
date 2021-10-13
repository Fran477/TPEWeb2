<?php

class categoriasModel
{
    private $db;

    function __construct()
    {
        //nos conectamos a la base de datos dbname=tpe_web2
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_deportes;charset=utf8', 'root', '');
    }

    function getCategorias()
    {
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $categorias;
    }
}
//<---no funciona---->
// function agregarCategorias($id_categoria, $nombre, $descripcion){
    
//     $query = $this->db->prepare("INSERT INTO categorias(id_categoria,nombre,descripcion) VALUES(?,?,?)");
//     $query->execute(array($id_categoria,$nombre,$descripcion));
// }
