<?php
$conexion =
mysql_connect("localhost","root","","bd_prueba");
if(!$conexion){
echo 'Error al conectar a la base de datos';
}
else{
echo 'Conectado a la base de datos';
}
?>
