<?php
session_start();
$user = $_SESSION['Usuario'];
//quitar notificaciones de error de php
error_reporting(0);
//importa las variables de conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($hostname_escuela, $username_escuela, $password_escuela, $database_escuela);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- crear link que mande al archivo insertar.php -->
<a href="insertar.php">Insertar</a>
<!-- crear una tabla con los datos de la tabla alumnos -->
<table border="1">
    <tr>
        <th>Nombre</th>
        <th>email</th>
        <th>Telefono</th>
        <th>Documento</th>
        <th>Direccion</th>
        <th>Acciones</th>
    </tr>
    <?php
    //crear la consulta
    $query = "SELECT * FROM usuarios WHERE id=$user";
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    ?>
    <tr>
        <?php
        while ($row = mysqli_fetch_array($result)) {
            ?>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['documento']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><a href="modificar.php?id=<?php echo $row['id'];?>">Editar</a> | 
            <a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
        </tr>
        <?php
    }
    ?>
</table>
<?php
//cerrar la conexion
mysqli_close($con);
?>