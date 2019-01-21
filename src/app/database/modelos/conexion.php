<?php
class Conexion{
    public function get_conexion(){
        $user = "postgres";                                                 //Usuario de la Base de Datos
        $pass = "1234";                                                     //Contraseña de la Base de Datos
        $host = "localhost";                                                
        $db = "DB_reservaMesas";                                            //Nombre de la Base de Datos
        $conexion = new PDO("pgsql:host=$host;dbname=$db",$user,$pass);
        return $conexion;
    }
}