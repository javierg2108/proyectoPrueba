<?php
    //TIMESTAMP sirve para definir la hora actual del registro 
   
    class Configuracion{
        private $servidor;
        private $user;
        private $password;
        private $status=0;

        function conexion(){
            $servidor = "localhost";
            $user = "root";
            $password = "";
            $con= new mysqli($servidor, $user, $password);
            if($con->connect_error){
                $_SESSION["ErrorDB"]="No ha sido posible la conexion con el sistema";
                header('Location: conexiones.php');
            }else{
                $_SESSION["Status"]="Se ha conectado con la base de datos exitosamente";
                header('Location: conexiones.php');
            }
            return $con;
        }

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

        function crearDB(){
            $con=$this->conexion();
            $sql = "CREATE DATABASE FRUVER;";
            if($con->query($sql)===TRUE){
                $_SESSION["Status"]="Se ha conectado con la base de datos exitosamente";
                header('Location: conexiones.php');
            }else{
                $_SESSION["ErrorDB"]="Error creando la base de datos".$con->error;
                header('Location: conexiones.php');
            }
            $con->close();
        }

        function crearTB(){
            $con=$this->conectarDB();
            $sql = "CREATE TABLE USUARIOS
            (id INT(6) AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(40) NOT NULL,
                email VARCHAR(40) NOT NULL,
                telefono VARCHAR(40) NOT NULL,
                documento VARCHAR(40) NOT NULL,
                direccion VARCHAR(40) NOT NULL,
                password VARCHAR(40) NOT NULL
                
                );";
                if($con->query($sql)===TRUE){
                    $status = 1;
                }else{
                    $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos".$con->error;
                    header('Location: conexiones.php');
                }
                $con->close();
        }
        function crearTBA(){
            $con=$this->conectarDB();
            $sql = "CREATE TABLE ADMINISTRADOR
            (id INT(6) AUTO_INCREMENT PRIMARY KEY,
                email VARCHAR(40) NOT NULL,
                telefono VARCHAR(40) NOT NULL,
                password VARCHAR(40) NOT NULL
                );";
                if($con->query($sql)===TRUE){
                    $status = 1;
                }else{
                    $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos".$con->error;
                    header('Location: conexiones.php');
                }
                $con->close();
        }
        function crearTBPE(){
            $con=$this->conectarDB();
            $sql = "CREATE TABLE PEDIDO
            (id INT(6) AUTO_INCREMENT PRIMARY KEY,
                precio VARCHAR(40) NOT NULL,
                fecha DATE NOT NULL,
                FOREIGN KEY (id) REFERENCES USUARIOS(id)
                );";
                if($con->query($sql)===TRUE){
                    $status = 1;
                }else{
                    $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos".$con->error;
                    header('Location: conexiones.php');
                }
                $con->close();
        }

        function crearTBP(){
            $con=$this->conectarDB();
            $sql = "CREATE TABLE PRODUCTOS
            (id INT(6) AUTO_INCREMENT PRIMARY KEY,
                nombre VARCHAR(40) NOT NULL,
                descripcion VARCHAR(100) NOT NULL,
                precio INT(40) NOT NULL,
                codigo VARCHAR(40) NOT NULL,
                categoria VARCHAR(40) NOT NULL,
                imagen longblob NOT NULL
                );";
                if($con->query($sql)===TRUE){
                    $status = 1;
                }else{
                    $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos".$con->error;
                    header('Location: conexiones.php');
                }
                $con->close();
        }
        function crearOrden(){
            $con=$this->conectarDB();
            $sql = "CREATE TABLE ORDEN
            (id_orden INT(6) AUTO_INCREMENT PRIMARY KEY,
                cantidad VARCHAR(40) NOT NULL,
                FOREIGN KEY (id) REFERENCES PRODUCTOS(id)
                );";
                if($con->query($sql)===TRUE){
                    $status = 1;
                }else{
                    $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos".$con->error;
                    header('Location: conexiones.php');
                }
                $con->close();
        }

        function crearUsuario(){
            $con=$this->conectarDB();
            //include 'seguridad.php';
            //$password = encriptarP($_POST["password"]);
            $sql = "INSERT INTO USUARIOS (nombre, email, telefono, documento, direccion, password)
            VALUES('".$_POST["nombre"]."', '".$_POST["email"]."', '".$_POST["telefono"]."', '".$_POST["documento"]."', '".$_POST["direccion"]."', '".$_POST["password"]."');";

            if($con->query($sql)===TRUE){
                $_SESSION["Status"]="Se ha creado el Usuario exitosamente";
                header('Location: ../usuario/usuario.php'); 
            }
            else{
                $_SESSION["ErrorDB"]="Error creando el Usuario en la base de datos"
                .$con->error;
                    header('Location: ../usuario/usuario.php');
            }
            $con->close();
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
                    echo "<br>El archivo ".basename($_FILES["imagen"]["name"]." ha sido subido exitosamente!");
                }else{
                    echo "Ha ocurrido un error.";
                }
            }
            $sql="INSERT INTO PRODUCTOS (nombre, descripcion, precio, codigo, categoria, imagen)
            VALUES('".$_POST["nombrep"]."', '".$_POST["descripcion"]."', '".$_POST["precio"]."', '".$_POST["codigo"]."', '".$_POST["categoria"]."', '".$archivo."');";
            
            if($con->query($sql)===TRUE){
                $_SESSION["Status"]="Se ha creado el producto";
                    header('Location: conexiones.php');
            }else{
                $_SESSION["ErrorDB"]="Error creando el producto ".$con->error;
                //header('Location: conexiones.php');
            }
            $con->close();
        }

        function crearTBO(){
            $con=$this->conectarDB();
            $sql = "CREATE TABLE ORDEN
            (id INT(6) AUTO_INCREMENT PRIMARY KEY,
                cantidad VARCHAR(40) NOT NULL,
                FOREIGN KEY (id) REFERENCES PRODUCTOS(id),
                FOREIGN KEY (id) REFERENCES PEDIDO(id)
               
                );";
                if($con->query($sql)===TRUE){
                    $status = 1;
                }else{
                    $_SESSION["ErrorDB"]="Error creando la tabla en la base de datos".$con->error;
                    header('Location: conexiones.php');
                }
                $con->close();
        }
       
        
    }
    
    
    $conex = new Configuracion();
    //$conex->crearDB();
    //Crear usuario en base de datos
    //$conex->crearTBPE();
    //$conex->conexion();
    //$conex->conectarDB();
    $conex->crearTBA();
    //$conex->crearDB();
?>