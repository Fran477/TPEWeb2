<?php

class categoriasModel
{
    private $db;

    function __construct()
    {
        
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_deportes;charset=utf8', 'root', '');
    }

    function getCategorias()
    {
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();
        $categorias = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $categorias;
    }

    
    function getCategoria($id){
        
        $query = $this->db->prepare("SELECT * FROM categorias WHERE id_categoria=?");
        $query->execute(array($id));
        $categoria = $query->fetch(PDO::FETCH_OBJ);
        
        return $categoria;
    }


    function agregarCategorias($nombre, $descripcion){
    
        $query = $this->db->prepare("INSERT INTO categorias(nombre,descripcion) VALUES(?,?)");
        $query->execute(array($nombre,$descripcion)); }
    
   

    function editarCategoria($nombre, $descripcion, $id_categoria)
    {
        $query = $this->db->prepare("UPDATE categorias SET nombre=?,  descripcion=? WHERE id_categoria=?");
        $query->execute(array($nombre, $descripcion, $id_categoria));
        
    }

//<-----------Solo deja borrar categorias que no tengan productos asociados------>
//<-----------falta arreglar-------------->
    function borrarCategoria($id)
    {
        $query = $this->db->prepare("DELETE FROM categorias WHERE id_categoria=?");
        $query->execute(array($id));
    }
}