<?php
//incluir el archivo conexion
require_once "conexion.php";
echo "Archivo cargado<br>";

//capturar los datos del form

$PacIdentificacion = $_POST["identificacion"]; 
$PacNombres = $_POST["nombres"]; 
$PacApellidos = $_POST["apellidos"]; 
$PacFechaNacimiento = $_POST["fecha_nacimiento"]; 
$PacSexo = $_POST["sexo"]; 

//crear instancia de la conexion
$conexion = new Conexion();
//obtener la conexion
$conn = $conexion->getConexion();

//var_dump($conn); exit;
//$conn = new Conexion();
//$conexion = $conn->getConexion();


//consulta sql
$sql= "INSERT INTO pacientes (PacIdentificacion, PacNombres, PacApellidos, PacFechaNacimiento, PacSexo) VALUES ('$PacIdentificacion','$PacNombres','$PacApellidos','$PacFechaNacimiento','$PacSexo')";
 
if($conn->query($sql)===TRUE){
//Encabezado
header('Content-Type: application/json');
//enviar mensaje por titpo en formato json
echo json_encode(["success"=> true,"message"=> "Datos Guardados correctamente"]);

} else {
    header('Content-Type: application/json');
    echo json_encode(["success"=> false,"message"=> "error".$sql."<br>".$conn->error]);

}



?>