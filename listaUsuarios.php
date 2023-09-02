<?php
require_once "conexion.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista Usuarios</title>
</head>

<body>
  <h2>Lista de usuarios</h2>

  <table>
    <thead>
      <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Email</th>
        <th>Telefono</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $sql = "SELECT * FROM usuarios";
      $result = mysqli_query($conexion, $sql);

      // Creamos un bucle

      while ($mostrar = mysqli_fetch_array($result)) {
      ?>

        <tr>
          <td><?php echo $mostrar['idUsuario']; ?>
          </td>
          <td><?php echo $mostrar['nombreUsuario']; ?>
          </td>
          <td><?php echo $mostrar['email']; ?>
          </td>
          <td><?php echo $mostrar['telefono']; ?>
          </td>
        </tr>
      <?php
      }
      ?>

    </tbody>
  </table>

</body>

</html>