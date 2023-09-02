<?php
// Requerir la conexion
require_once "conexion.php";

// Obtenemos los datos enviados del metodo POST
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];

// Insertamos los datos a la tabla
$consulta =  "INSERT INTO usuarios (nombreUsuario,email,telefono) VALUES ('$nombre','$email','$telefono')";

// Ejecutamos la conexion y la insercion de datos.
mysqli_query($conexion, $consulta);
// Cerramos la conexion
mysqli_close($conexion);

echo "registro exitoso";
header("location: index.php");

?>

<!-- <a href="index.php">Nuevo registro</a> -->