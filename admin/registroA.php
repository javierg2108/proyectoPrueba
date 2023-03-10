
<html>
    <head>
    <title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
    </head>
    
        <body >
     
          
          <div class="container mt-3 d-flex justify-content-center mt-5">
              <div class="card mb-3 " style="width: 1000px; height: 450px;">
                  <div class="row g-0">
                    <div class="">
                      <!--<img src="../img/images/fondo1.png" class="img-fluid mt-5 rounded-start" width="100%" alt="...">-->
                      <h5 class="card-title text-center mt-3">Registro de Usuarios</h5>
                    </div>
                    <hr>
                    <div class="">
                      <?php
                      ?>
                      <div class="card-body">
                      <form  action="../config/crearA.php" method="POST">
                        <div class="row">
                          <div class="col-6">
                                <div class="mb-3">
                                  <label for="email" class="form-label ">Email</label>
                                  <input type="email" class="form-control" id="email " name="email" placeholder="Ingrese su email" required>
                                </div>
                                <div class="mb-3">
                                  <label for="telefono" class="form-label ">Telefono</label>
                                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Ingrese su Teléfono" required>
                                </div>
                        
                                <div class="mb-3">
                                  <label for="password" class="form-label ">Password</label>
                                  <input type="password" class="form-control" id="password" name="password" placeholder="Ingrese su password" required>
                                </div>
                                
                                </div>
                                </div>
                                <hr>
                                <div class="text-center">
                                <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Registrarse</button>
                                </div>
                              </form>
                      </div>
                    </div>
                  </div>
</div>
</div>

      </body>
</html>