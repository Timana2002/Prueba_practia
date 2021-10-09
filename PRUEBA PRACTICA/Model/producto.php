<?php

class producto{

    public $con;
    public $id_producto;
    public $nombreproducto;
    public $referencia;
    public $precio;
    public $peso;
    public $categoria;
    public $stock;
    public $fecha;

    public function __construct()
    {
        try{
            $this->con = conexion::conectar();

        }catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function listar(){
        try{

            $query = "SELECT * FROM productos";

            $stmt = $this->con->prepare($query);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_OBJ);

        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function registrar(producto $data){

        try{

        $query = "INSERT INTO productos (nombre_producto, referencia_producto, precio_producto, peso_producto, categoria_producto, stock_producto, fecha_creacion_producto) VALUE (?,?,?,?,?,?,?)";

        $this->con->prepare($query)->execute(array($data->nombreproducto, $data->referencia, $data->precio, $data->peso, $data->categoria, $data->stock, $data->fecha));

        }catch(Exception $e){
            die($e->getMessage());
        }
        
    }

    public function actualizarProducto($data)
    {
        try{

            $query = "UPDATE productos SET nombre_producto = ?, referencia_producto = ?, precio_producto = ?, peso_producto = ?, categoria_producto = ?, stock_producto = ? WHERE id_producto = ?";
    
            $this->con->prepare($query)->execute(array($data->nombreproducto, $data->referencia, $data->precio, $data->peso, $data->categoria, $data->stock, $data->id_producto));
    
            }catch(Exception $e){
                die($e->getMessage());
            }
    }

    public function delete($id){
        
        try{

            $query = "DELETE FROM productos WHERE id_producto = ?";
            $stmt = $this->con->prepare($query);
            $stmt->execute(array($id));

        }
        catch(Exception $e){
            die($e->getMessage());
        }
    }

    public function cargarProducto($id)
    {
        try{

            $query = "SELECT * FROM productos";
            $stmt = $this->con->prepare($query);
            $stmt->execute(array($id));
            return $stmt->fetch(PDO::FETCH_OBJ);

        }catch(Exception $e){
            die($e->getMessage());
        }
    }
}