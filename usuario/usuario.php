<?php
    session_start();
    if(!isset($_SESSION["Usuario"])){
        //header('Location: usuario.php');
    }
    
?>
<html>
    <head>

    </head>
    <body>
    <title>Ingreso Usuarios</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="./js/bootstrap.bundle.min.js"></script>
        
    </body>
    <?php
 
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Usuarios</title>
        <meta charset = "utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="../css/bootstrap.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.min.js"></script>
    </head>
    <body >
        <?php
            if(isset ($_SESSION["Error"])){
                echo '<div class="alert alert-danger m-0"><i class="bi bi-exclamation-circle-fill me-2"></i>';
                echo $_SESSION["Error"];
                echo '</div>';
                session_unset();
                session_destroy();
            }
            
?>
        
            
        </div>
        <div class="container d-flex justify-content-center mt-5">
        <div class="card col-8   ">
  <!--<img src="../img/pumpkins.png" class="card-img" alt="...">-->
  <div class="card-img-overlay">
  <div class="container">
        <h1 class="text-center">Ingreso de Usuarios</h1>
        <hr>
        </div>
        <div class="container mt-1">
            <form action="../controller/login.php" method="POST" class="was-validated">
                <div class="form-floating m-4">
                    <input type="email" class="form-control" id="email"
                    placeholder="Ingrese su email" name="email" required>
                    <div class="invalid-feedback text-danger">Por favor llene este campo</div>
                    <div class="valid-feedback">El correo electronico es adecuado</div>
                    <label for="email"><i class="bi bi-envelope"></i>Email:</label>
                    
                </div>
                <div class="form-floating m-4">
                    <input type="password" class="form-control" id="password"
                    placeholder="Ingrese su contraseña" name="password" required>
                    <label for="password"><i class="bi bi-lock"></i>Password:</label>
                </div>
                <div class="d-grid m-0">
                    <div class="btn-group">
                    <button type="submit" class="btn btn-success ms-4 me-4" >
                            <i class="bi bi-door-open-fill me-3"></i>Ingresar
                        </button>
                        
                    </div>
                    <hr>
                    <a href="registroU.php" class="text-decoration-none">Crear una cuenta</a>
                </div>
            </form>
            <a href="http://localhost/proyectoPrueba" type="submit" class="btn btn-warning me-4" >
                            <i class="bi bi-door-open-fill me-2"></i>Inicio
        </a>
            
        </div>
  </div>
</div>
</div>
        
    </body>
</html>