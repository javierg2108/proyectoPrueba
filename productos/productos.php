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
    
  
        <body background="../img/images/berries.jpg">

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
                      <h5 class="card-title text-center mt-3">Registro de productos</h5>
                    </div>
                    <hr>
                    <div class="">
                      <div class="card-body">
                        <form  action="../config/subir.php" method="POST" enctype="multipart/form-data">
                          <div class="row">
                            <div class="col-6">
                                  <div class="mb-3">
                                    <label for="nombrep" class="form-label ">Nombre</label>
                                    <input type="text" class="form-control" id="nombrep" name="nombrep" aria-describedby="email" placeholder="Ingrese su nombre" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="descripcion" class="form-label ">Descripcion</label>
                                    <input type="text-area" class="form-control" id="descripcion " name="descripcion" placeholder="Ingrese una descripcion" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="precio" class="form-label ">Precio</label>
                                    <input type="text" class="form-control" id="precio" name="precio" placeholder="Ingrese el precioi" required>
                                  </div>
                                  </div>
                                  <div class="col-6">
                                  <div class="mb-3">
                                    <label for="codigo" class="form-label ">Código</label>
                                    <input type="codigo" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="categoria" class="form-label ">Categoria</label>
                                    <input type="text" class="form-control" id="categoria" name="categoria" placeholder="Ingrese la categoria del producto" required>
                                  </div>
                                  Seleccione el archivo a subir
                                  <input type="file" name="imagen" id="imagen">
                                  <br>
                                  <input type="submit" value="subir" name="submit">
                                  </div>
                                  </div>
                                  <hr>
                                  <div class="text-center">
                                  <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Registrar</button>
                                  </div>
                                </form>

                                
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            
      </body>
</html>