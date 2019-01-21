<?php 
function cargar(){
    $consulta = new Base();
    $filas = $consulta->consultar();
    echo "<table border=1 bordercolor=red> 
        <th>ID</th>
        <th>Numero de Identificacion</th>
        <th>Nombre</th>
        <th>Telefono</th>
        <th>Correo Electronico</th>";

    foreach($filas as $fila){
        echo"<tr>";
        echo "<td>".$fila['pers_sec']."</td>";    
        echo "<td>".$fila['pers_numero_identificacion']."</td>";    
        echo "<td>".$fila['pers_nombre']."</td>";    
        echo "<td>".$fila['pers_telefono']."</td>";      
        echo "<td>".$fila['pers_correo']."</td>";      
        echo"</tr>";
    }
   echo "</table>";
}
?>