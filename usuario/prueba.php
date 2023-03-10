<?php
session_start();
$user = $_SESSION['Usuario'];
//llamar la conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($hostname_escuela, $username_escuela, $password_escuela, $database_escuela);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- crear un formulario para editar registros en la tabla alumnos -->
<form action="prueba.php" method="post">
    <?php
    // consultar un registro de la tabla alumnos
    $query = "SELECT * FROM usuarios WHERE id = " . $user;
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label for="nombre">Email:</label>
        <input type="text" name="email" id="email" value="<?php echo $row['email']; ?>">
        <br>
        <label for="nombre">Telefono:</label>
        <input type="text" name="telefono" id="telefono" value="<?php echo $row['telefono']; ?>">
        <br>
        <label for="apellido">Documento:</label>
        <input type="text" name="documento" id="documento" value="<?php echo $row['documento']; ?>">
        <br>
        <label for="edad">direccion:</label>
        <input type="text" name="direccion" id="direccion" value="<?php echo $row['direccion']; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
        <br>
        <input type="submit" value="Guardar" name="guardar">
        <?php
    }
    ?>
</form>
<?php
// validar que el formulario se ha enviado
if ( isset( $_REQUEST['guardar'])) {
    //crear la consulta
    $query = "UPDATE usuarios SET nombre='" . $_POST['nombre'] . "', documento='" . $_POST['documento'] . "', direccion='" . $_POST['direccion'] . "' WHERE id=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: index.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($con);
?>