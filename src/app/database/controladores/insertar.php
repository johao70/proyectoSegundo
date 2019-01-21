<?php 
require_once('../modelo/conexion.php');
require_once('../modelo/database.php');

$mensaje = null;

$pers_numero_identificacion = $_POST['pers_numero_identificacion'];
$pers_nombre = $_POST['pers_nombre'];
$pers_telefono = $_POST['pers_telefono'];
$pers_correo = $_POST['pers_correo'];
$pers_telefono = $_POST['pers_clave'];
$pers_correo = $_POST['tipo_pers_sec'];
if(strlen($pers_numero_identificacion)>0 && strlen($pers_nombre)>0 && strlen($pers_telefono)>0 && strlen($pers_correo)>0 && strlen($pers_clave)>0 && strlen($tipo_pers_sec))
{
    $insertar = new Base();
    $mensaje  = $insertar -> insertar($pers_numero_identificacion, $pers_nombre, $pers_telefono, $pers_correo, $pers_clave, $tipo_pers_sec);
    echo "<a href= '../index.html'>Regresar</a>";
}else{
    echo "Rellene todos los campos";
}
echo $mensaje;
?>