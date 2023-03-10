<?php
    session_start();

    class Login{
        private $email;
        private $password;

        function inicio(){
            /*$email= $_POST["email"];
            include '../config/seguridad.php';
            $encriptar = new Seguridad();
            $password = $encriptar->encriptarP($_POST["password"]);*/

            include 'conexion.php';
            $conexion = new Conexion();
            $con = $conexion->conectarDB();
            $sql = "SELECT * FROM ADMINISTRADOR
            WHERE email='".$_POST['email']."'AND password='".$_POST['password']."';";
            $resulset = $con->query($sql);

            if($resulset->num_rows>0){
                while($fila=$resulset->fetch_assoc()){
                    $_SESSION["Usuario"]=$fila["email"];
                    header('Location: http://localhost/proyectoPrueba/carrito/indexAdmin.php');
                }
            }else{
                $_SESSION["Error"]="Por favor verifique su credencial de acceso.!";
                header('Location:./carrito/indexAdmin.php');
            }
            
            $con->close();
            
        }
    }
    $init = new Login();
    $init->inicio();


?>