<?php
include ("conexion.php");

$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirmation=$_POST['password_confirmation'];

$query="INSERT INTO registro (first_name,last_name,email,password,password_confirmation) VALUES ('$first_name','$last_name','$email','$password','$password_confirmation')";
$resultado=$conexion->query($query);
if($resultado){
echo"insercion exitosa";
}else{
echo"insercion no exitosa";
}
?>
