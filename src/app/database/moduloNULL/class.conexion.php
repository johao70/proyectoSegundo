<?php
class Conexion{
    public function get_conexion(){
        $user = "postgres";
        $pass = "123";
        $host = "localhost";
        $db = "DB_reservaMesas";
        $conexion = new PDO ("pgsql:host = $host; db = $db;", $user, $pass);
        return $conexion;
    }
}
?>