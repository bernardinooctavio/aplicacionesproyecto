<?php
//conectar con el servidor
$conectar=@mysql_connect('loacalhost','root','');
//verificacion de laconexion
if(!$conectar)
{
	echo"No se pudo conectar con el servidor";
}else{
$base=mysqll_select_db("bd_prueba");
if(!$base){
echo "No se encontro la base de datos";
	}
}
//recuperar variables
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email']
$nombre=$_POST['password'];
$nombre=$_POST['password_confirmation'];

$sql="INSERT INTO datos VALUES('$first_name','$last_name','$email','$password','$password_confirmation')";

//ejecutar la sentencia
$ejecutar=mysql_query($sql);
//verificar la ejecucion
if(!$ejecutar){
echo="Hubo algun error";
}else{
echo"Datos guardados correctamente <br><a href='index.php'>Volver</a>"
}
?>
