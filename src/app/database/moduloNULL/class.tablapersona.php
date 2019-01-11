<?php
    class Tablapersona{
        public function insertarDatos($pers_numero_identificacion, $pers_nombre, $pers_telefono, $pers_correo, $pers_clave, $pers_fecha_nacimiento, $tipo_pers_sec){
            $modelo = new Conexion();
            $conexion = $modelo -> get_conexion();
            $sql = "insert into persona(pers_numero_identificacion, pers_nombre, pers_telefono, pers_correo, pers_clave, pers_fecha_nacimiento, tipo_pers_sec) values (
                :pers_numero_identificacion, :pers_nombre, :pers_telefono, :pers_correo, :pers_clave, :pers_fecha_nacimiento, :tipo_pers_sec)";
            $statement = $conexion -> prepare($sql);
            $statement -> bindParam(":pers_numero_identificacion",$pers_numero_identificacion);
            $statement -> bindParam(":pers_nombre",$pers_nombre);
            $statement -> bindParam(":pers_telefono",$pers_telefono);
            $statement -> bindParam(":pers_correo",$pers_correo);
            $statement -> bindParam(":pers_clave",$pers_clave);
            $statement -> bindParam(":pers_fecha_nacimiento",$pers_fecha_nacimiento);
            $statement -> bindParam(":tipo_pers_sec",$tipo_pers_sec);
            if(!$statement){
                return "Error al insertar los datos";
            }else{
                $statement -> execute();
                return "Datos insertos correctamente";
            }
        }

        public function consultaDatos(){
            $array = null;
            $modelo = new Conexion();
            $conexion = $modelo -> get_conexion();
            $sql = "select * from persona";
            $statement = $conexion -> prepare($sql);
            $statement -> execute();
            while($resultado = $statement -> fetch());
                $array = $resultado;
        }        
    }
    return $array;
?>