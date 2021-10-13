<?php

class productosModel
{
    private $db;

    function __construct()
    {
        //nos conectamos a la base de datos dbname=tpe_web2
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_deportes;charset=utf8', 'root', '');
    }

    function getProductos()
    {
        $query = $this->db->prepare("SELECT * FROM productos");
        $query->execute();
        $productos = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $productos;
    }

    function getProducto($id){
        
        $query = $this->db->prepare("SELECT * FROM productos WHERE id_productos=?");
        $query->execute(array($id));
        $producto = $query->fetch(PDO::FETCH_OBJ);
        
        return $producto;
    }

    function getProductos_categoria($id){
        
        $query = $this->db->prepare("SELECT * FROM productos WHERE id_categoria=?");
        $query->execute(array($id));
        $productosPorCategoria = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $productosPorCategoria;
    
    }

    function agregarProducto($nombre, $precio, $descripcion, $stock, $imagen, $id_categoria)
    {
        $query = $this->db->prepare("INSERT INTO productos(nombre,precio,descripcion,stock,imagen,id_categoria) VALUES(?,?,?,?,?,?)");
        $query->execute(array($nombre,$precio,$descripcion,$stock,$imagen, $id_categoria));
    }

    function borrarProducto($id)
    {
        $query = $this->db->prepare("DELETE FROM productos WHERE id_productos=?");
        $query->execute(array($id));
    }

    function editarProducto($nombre, $precio, $descripcion, $stock, $imagen, $id_categoria, $id_productos)
    {
        $query = $this->db->prepare("UPDATE productos SET nombre=?,  precio=?, descripcion=?, stock=?, imagen=? , id_categoria=? WHERE  id_productos=?");
        $query->execute(array($nombre, $precio, $descripcion, $stock, $imagen, $id_categoria, $id_productos));
        
    }

   
}
