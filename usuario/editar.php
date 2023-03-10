<?php
session_start();
$user = $_SESSION['Usuario'];

//llamar la conexion
require_once('conexion.php');
$con = mysqli_connect($hostname, $username, $password, $database);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>
<html>
<head>
  <title>Inicio</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <style>

    </style>
<?php

?>

<form action="editar.php" method="post">
    <?php
    $query = "SELECT * FROM usuarios WHERE id = " . $user;
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <div class="container mt-5">
        <label for="nombre">Nombre:</label>
        <input class="form-control" type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label class="mt-2" for="apellido">Email:</label>
        <input class="form-control" type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
        <br>
        <label class="mt-2" for="edad">Telefono:</label>
        <input class="form-control" type="text" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
        <br>
        <label class="mt-2" for="apellido">Documento:</label>
        <input class="form-control" type="text" name="documento" id="documento" value="<?php echo $row['documento']; ?>">
        <br>
        <label class="mt-2" for="apellido">Dirección:</label>
        <input class="form-control" type="text" name="direccion" id="direccion" value="<?php echo $row['direccion']; ?>">
        <div class="d-grid">
        <button class="btn btn-success mt-2" type="submit" value="Guardar" name="guardar">Guardar</button>
        </div>
        </div>
        <?php
    }
    ?>
</form>
<?php
if ( isset( $_REQUEST['guardar'])) {
    $query = "UPDATE usuarios SET nombre='" . $_POST['nombre'] . "', email='" . $_POST['email'] . "', telefono='" . $_POST['telefono'] . "', documento='" . $_POST['documento'] . "', direccion='" . $_POST['direccion'] . "' WHERE id=" . $user;
    $result = mysqli_query($con, $query);
    if ($result) {
        header('Location: index.php');
    } else {
        echo "Error al editar el registro";
    }
}

mysqli_close($con);
?>
</body>
</html>