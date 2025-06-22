<?php
include 'conexion.php';

//crear la instancia d ela conexion

//crear instancia de la conexion
$conexion = new Conexion();
//obtener la conexion
$conn = $conexion->getConexion();

//obtener los datos del form y lo guardamos en variables

$usuario = $_POST['usuario'];
$pass = $_POST['pass'];

//conuslta sql

$sql = "select * from usuario WHERE usuario='$usuario' AND pass='$pass'";
$result = $conn->query($sql);

if($result->num_rows > 0){
  echo '<script> window.location.href = "menu.html";</script>';
}else{

$mensaje = "Usuario o pass incorrectos";
header("location: login.html?mensaje=$mensaje");

}





?>

