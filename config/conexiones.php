<?php
    session_start();
    if(!isset($_SESSION["Usuario"])){
        //header('Location: crear.php');
    }
    $_SESSION["Usuario"];

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
        
    </head>
    <body>


    <?php
            if(isset($_SESSION["ErrorDB"])){
                echo '<div class="alert alert-danger m-0">
                <strong>ERROR</strong>';
                echo $_SESSION["ErrorDB"];
                echo '</div>';
                session_unset();
                session_destroy();
            }
            if(isset($_SESSION["Status"])){
                echo '<div class="alert alert-success m-0">
                <strong>Exito</strong> La operación ha sido realizada.
                </div>';
                session_unset();
                session_destroy();
            }
        ?>
        </body>
        </html>