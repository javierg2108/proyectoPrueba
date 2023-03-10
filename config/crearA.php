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





        function crearAdministrador(){
            $con=$this->conectarDB();
            /*include '../config/seguridad.php';
            $password = encriptarP($_POST["password"]);*/
            $sql = "INSERT INTO ADMINISTRADOR ( email, telefono, password)
            VALUES('".$_POST["email"]."', '".$_POST["telefono"]."', '".$_POST["password"]."');";

            if($con->query($sql)===TRUE){
                $_SESSION["Status"]="Se ha creado el Administrador exitosamente";
                header('Location: conexiones.php'); 
            }
            else{
                $_SESSION["ErrorDB"]="Error creando el Administrador en la base de datos"
                .$con->error;
                    header('Location: conexiones.php');
            }
            $con->close();
        }



       
        
    }
    
    
    $conex = new Configuracion();
    $conex->crearAdministrador();

?>