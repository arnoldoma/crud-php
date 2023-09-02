<?php

// $mysqli = new mysqli("localhost", "root", "", "laravel");
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }
// echo $mysqli->host_info . "\n";


// echo "<br>";

// echo "<br>";
// echo "<br>";
// $mysqli = new mysqli("127.0.0.1", "root", "", "laravel", 3306);
// if ($mysqli->connect_errno) {
//     echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
// }

// echo $mysqli->host_info . "\n";


// require "conexion.php";


// if ($conexion) {
//     echo "Conectado Exitosamente";
// } else {
//     echo "No tiene Conexion";
// }

// 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>

<body>

    <form action="registrar.php" method="POST">
        <h2>Registro de usuario</h2>
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" placeholder="Ingrese tu nombre">
        <br></br>
        <label for="email">Correo electrónico</label>
        <input type="text" name="email" placeholder="Ingrese tu correo">
        <br></br>

        <label for="telefono">Teléfono</label>
        <input type="text" name="telefono" placeholder="Ingrese tu telefono">
        <br>
        <button type="submit" name="enviar">Guardar</button>

    </form>

</body>

</html>