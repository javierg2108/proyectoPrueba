<html>
    <head>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        
  

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
<div class="container mt-5">
<form action="editarP.php" method="post">
    <?php
    $query = "SELECT * FROM pedido WHERE id = " . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //recorrer el resultado de la consulta
    while ($row = mysqli_fetch_array($result)) {
        ?>
       
        <label for="descripcion">Estado:</label>
        <input class="form-control" type="text" name="descripcion" id="descripcion" value="<?php echo $row['estado']; ?>">
        <br>
        <input type="hidden" name="id" id="id" value="<?php echo $_REQUEST['id']; ?>">
        <br>
        <input class="" type="submit" value="Guardar" name="guardar">
        <?php
    }
    ?>
</form>
</div>
<?php
// validar que el formulario se ha enviado
if ( isset( $_REQUEST['guardar'])) {
    //crear la consulta
    $query = "UPDATE pedido SET estado='". $_POST['estado']."' WHERE id=" . $_REQUEST['id'];
    //ejecutar la consulta
    $result = mysqli_query($con, $query);
    //comprobar el resultado de la consulta
    if ($result) {
        echo "Registro editado correctamente";
        //redireccionar a la pagina principal
        header('Location: http://localhost/proyectoPrueba/carrito/pedidos.php');
    } else {
        echo "Error al editar el registro";
    }
}
//cerrar la conexion
mysqli_close($con);
?>
  </body>
</html>