<?php
    class Tablapersona{
        public function insertarDatos($pers_numero_identificacion, $pers_nombre, $pers_telefono, $pers_correo, $pers_clave, $pers_fecha_nacimiento, $pers_tipo){
            $modelo = new Conexion();
            $conexion = $modelo -> get_conexion();
            $sql = "insert into persona(pers_numero_identificacion, pers_nombre, pers_telefono, pers_correo, pers_clave, pers_fecha_nacimiento, pers_tipo) values (
                :pers_numero_identificacion, :pers_nombre, :pers_telefono, :pers_correo, :pers_clave, :pers_fecha_nacimiento, :pers_tipo)";
            $statement = $conexion -> prepare($sql);
            $statement -> bindParam(":pers_numero_identificacion");
            $statement -> bindParam(":pers_nombre");
            $statement -> bindParam(":pers_telefono");
            $statement -> bindParam(":pers_correo");
            $statement -> bindParam(":pers_clave");
            $statement -> bindParam(":pers_fecha_nacimiento");
            $statement -> bindParam(":pers_tipo");
            if(!$statement){
                return "Error al insertar los datos";
            }else{
                $statement = -> execute();
                return "Datos insertos correctamente";
            }
        }

        public function consultaDatos(){
            $array = null;
            $modelo = new Conexion();
            $conexion = $modelo -> get_conexion():
            $sql = "select * from persona";
            $statement = $conexion -> prepare($sql);
            $statement -> execute();
            while($resultado = $statement -> fetch());
                $array = $resultado;
        }
        return $array;
    }
?>