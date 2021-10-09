<?php

class conexion{

    public static function conectar(){
        $pdo = new PDO("mysql: host=localhost; dbname=pruebapractica","root","");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    }
    
}