<?php
    session_start();



    class Configuracion{
        private $servidor;
        private $user;
        private $password;
        private $status=0;
    function conectarDB(){
        $servidor = "localhost";
        $user = "root";
        $password = "";
        $database = "FRUVER";
        $con= new mysqli($servidor, $user, $password, $database);
        if($con->connect_error){
            $_SESSION["ErrorDB"]="No ha sido posible la conexion con la base de datos".$con->error;
            header('Location: conexiones.php');
        }else{
            $status=1;
        }
        return $con;
    }



    function crearProducto(){
        $con=$this->conectarDB();
        $directorio = "../images/";
        $archivo = $directorio . basename($_FILES["imagen"]["name"]);
        $estado = 1;
        $tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        //Verificar si es o no una imagen por medio de getimagesize
        if(isset($_POST["submit"])) {
            $verificar = getimagesize($_FILES["imagen"]["tmp_name"]);
            if($verificar !== false) {
                echo "El archivo es una imagen <br>";
            }else {
                echo "El archivo no es una imagen <br>";
                $estado=0;
            }
        }
        //Verificar si el archivo existe
        if(file_exists("$archivo")){
            echo "El archivo ya existe en la ruta destino <br>";
        }else {
            echo "El archivo no existe en el directorio y se puede subir <br>";
        }

        //Verificar el tipo de la imagen
        if ($tipoArchivo != "png" && $tipoArchivo != "jpg" && $tipoArchivo != "jpeg") {
            echo "Tipo de archivo no permitido";
            $estado=0;
        }else {
            echo "El archivo es de tipo:$tipoArchivo";
        }

        //Verificar el tamaño de la imagen
        if($_FILES["imagen"]["size"]>1000000){
            echo "<br>El peso del archivo excede el tamaño permitido";
            $estado=0;
        }

        //Verificar si el archivo es apto para subir
        if($estado == 0){
            echo "Lo sentimos, su archivo no ha podido subirse";
        }else{
            if(move_uploaded_file($_FILES["imagen"]["tmp_name"], $archivo)){
                echo "<br>El archivo ".basename($_FILES["archivoSubir"]["name"]." ha sido subido exitosamente!");
            }else{
                echo "Ha ocurrido un error.";
            }
        }
        $sql="INSERT INTO PRODUCTOS (nombre, descripcion, precio, codigo, categoria, imagen)
        VALUES('".$_POST["nombrep"]."', '".$_POST["descripcion"]."', '".$_POST["precio"]."', '".$_POST["codigo"]."', '".$_POST["categoria"]."', '".$archivo."');";
        
        if($con->query($sql)===TRUE){
            $_SESSION["Status"]="Se ha creado el tipo de habitacion correctamente";
            header('Location: ../productos/productos.php');
        }else{
            $_SESSION["ErrorDB"]="Error creando el tipo de habitacion ".$con->error;
            header('Location: ../productos/productos.php');
        }
        $con->close();
    }
}
   $conex = new Configuracion();
    $conex->crearProducto();
?>
