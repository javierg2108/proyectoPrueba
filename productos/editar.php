
<?php
//llamar la conexion
require_once('conexion.php');
//conectar a la base de datos escuela con mysqli
$con = mysqli_connect($hostname, $username, $password, $database);
//comprobar la conexion
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
<!-- crear un formulario para editar registros en la tabla alumnos -->
<form action="editar.php" method="post">
    <?php
    // consultar un registro de la tabla alumnos
    $query = "SELECT * FROM PRODUCTOS WHERE id = " . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $row['nombre']; ?>">
        <br>
        <label for="descripcion">descripcions:</label>
        <input type="text" name="descripcion" id="descripcion" value="<?php echo $row['descripcion']; ?>">
        <br>
        <label for="precio">precio:</label>
        <input type="text" name="precio" id="precio" value="<?php echo $row['precio']; ?>">
        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
        <br>
        <label for="codigo">codigos:</label>
        <input type="text" name="codigo" id="codigo" value="<?php echo $row['codigo']; ?>">
        <br>
        <label for="categoria">categorias:</label>
        <input type="text" name="categoria" id="categoria" value="<?php echo $row['categoria']; ?>">
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
    $query = "UPDATE PRODUCTOS SET nombre='" . $_POST['nombre'] . "', descripcion='" . $_POST['descripcion'] . "', precio='" . $_POST['precio'] . "', codigo='" . $_POST['codigo'] . "' , categoria='" . $_POST['categoria'] . "'WHERE id=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: http://localhost/proyectoPrueba/carrito/indexAdmin.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($con);
?>