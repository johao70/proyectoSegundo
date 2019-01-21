<?php 
require_once "modelo/conexion.php";
require_once "modelo/database.php";
require_once "controlador/cargar.php";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Clientes</title>
</head>
<body>
    <h1>Clientes Registrados</h1>
    <?php cargar(); ?>

</body>
</html>