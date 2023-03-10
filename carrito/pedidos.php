<?php
session_start();
$user = $_SESSION['Usuario'];
//quitar notificaciones de error de php
error_reporting(0);
//importa las variables de conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($hostname, $username ,$password, $database);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
include '../vistas/menuU.php'
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
</html>
<!-- crear link que mande al archivo insertar.php -->
<!-- crear una tabla con los datos de la tabla alumnos -->
<div class="container">
<table class="table table-striped text-cemter p-5 mt-5">
    <tr>
        <th>Precio</th>
        <th>Estado</th>
        <th>Fecha</th>
        <td>Acciones</td>
        
    </tr>
    <?php
    //crear la consulta
    $query = "SELECT * FROM pedido WHERE estado='Por entregar'";
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    ?>
    <tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <td><?php echo $row['precio']; ?></td>
            <td><?php echo $row['estado']; ?></td>
            <td><?php echo $row['fecha']; ?></td>
          
            <td><a type="button" class="btn btn-warning " href="editarP.php?id=<?php echo $row['id'];?>">Editar</a>  
        </tr>
        <?php
    } 
    ?>
</table>
</div>
<?php
//cerrar la conexion
mysqli_close($con);
include '../vistas/footer.php';
?>

