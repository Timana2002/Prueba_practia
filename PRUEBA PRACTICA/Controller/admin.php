<?php

include_once 'Model/producto.php';

class admin{

    public $model;

    public function __construct()
    {
        $this->model = new producto();
    }

    public function index()
    {
        include_once 'View/home.php';
    }

    public function register()
    {
        include_once 'View/register.php';
    }  

    public function guardar(){
        
        date_default_timezone_get('America/Bogota');
        $pro = new producto();
        $pro->nombreproducto = $_POST['nombre'];
        $pro->referencia = $_POST['referencia'];
        $pro->precio = $_POST['precio'];
        $pro->peso = $_POST['peso'];
        $pro->categoria = $_POST['categoria'];
        $pro->stock = $_POST['stock'];
        $pro->fecha = date("Y-m-d");

        $this->model->registrar($pro);

        header("Location: index.php");
    }

    public function update()
    {
        $pro = new producto();
        $pro->id_producto = $_POST['idproducto'];
        $pro->nombreproducto = $_POST['nombre'];
        $pro->referencia = $_POST['referencia'];
        $pro->precio = $_POST['precio'];
        $pro->peso = $_POST['peso'];
        $pro->categoria = $_POST['categoria'];
        $pro->stock = $_POST['stock'];

        $this->model->actualizarProducto($pro);

        header("Location: index.php");

    }

    public function eliminar()
    {
        $this->model->delete($_REQUEST['id']);

        header("Location: index.php");
    }

    public function actualizar()
    {
        $up = new producto();

        if(isset($_REQUEST['id']))
        {
            $up = $this->model->cargarProducto($_REQUEST['id']);
        }
        include_once('View/update.php');
    }
}