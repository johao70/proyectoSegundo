<?php
class Base {

    public function insertar($pers_numero_identificacion, $pers_nombre, $pers_telefono, $pers_correo){
        $modelo = new Conexion();
        $conexion = $modelo -> get_conexion();
        $sql = "insert into persona(pers_numero_identificacion, pers_nombre, pers_telefono, pers_correo) values (:pers_numero_identificacion, :pers_nombre, :pers_telefono, :pers_correo)";
        $statement = $conexion -> prepare($sql);
        $statement -> bindParam(':pers_numero_identificacion', $pers_numero_identificacion);
        $statement -> bindParam(':pers_nombre', $pers_nombre);
        $statement -> bindParam(':pers_telefono', $pers_telefono);
        $statement -> bindParam(':pers_correo', $pers_correo);

        if(!$statement){
            return "Error en la carga";
        }
        else{
            $statement->execute();
            return "Carga exitosa";
        }
    }

    public function consultar(){
        $array = null;
        $modelo = new Conexion();
        $conexion = $modelo->get_conexion();
        $sql = "select * from persona";
        $statement =$conexion->prepare($sql);
        $statement->execute();
        while($resultado = $statement->fetch()){
            $array[]=$resultado;
        }
        return $array;
    } 
}