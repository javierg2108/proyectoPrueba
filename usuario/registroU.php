<?php
  session_start();
?>

<html>

<head>
  <title>Inicio</title>
  <meta charset="UTF-8">
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

  <div class="container mt-3 d-flex justify-content-center mt-5">
    <div class="card mb-3 " style="width: 1000px; height: 450px;">
      <div class="row g-0">
        <div class="">
          <!--<img src="../img/images/fondo1.png" class="img-fluid mt-5 rounded-start" width="100%" alt="...">-->
          <h5 class="card-title text-center mt-3">Registro de Usuarios</h5>
        </div>
        <hr>
        <div class="">
          
          <div class="card-body">
            <form action="../config/crear.php" method="POST">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <label for="nombre" class="form-label ">Nombre</label>
                    <input type="text" class="form-control" id="nombreu" name="nombreu" aria-describedby="email"
                      placeholder="Ingrese su nombre" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label ">Email</label>
                    <input type="email" class="form-control" id="email " name="email" placeholder="Ingrese su email"
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="telefono" class="form-label ">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono"
                      placeholder="Ingrese su Teléfono" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <label for="documento" class="form-label ">Documento</label>
                    <input type="documento" class="form-control" id="documento" name="documento"
                      placeholder="Ingrese su documento" required>
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label ">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"
                      placeholder="Ingrese su dirección" required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                      placeholder="Ingrese su password" required>
                  </div>

                </div>
              </div>
              <hr>
              <div class="text-center d-grid">
                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Registrarse</button>
              </div>
            </form>
            <a href="usuario.php" class="text-decoration-none">iniciar sesión</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  

</body>

</html>