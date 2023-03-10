
<?php
      session_start();
      if(!isset($_SESSION["Usuario"])){

      }

?>

<html>
<head>
    <title>Cuenta Usuario</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
    
    <style>
    .container{padding: 20px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
    <body>
    <h1>hqwdjkh</h1>     
    <?php
        include '../carrito/Configuracion.php';
        $query = $db->query("SELECT * FROM usuarios ORDER BY id ASC LIMIT 50 ");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
<div class="container">
<div class="card-body">
            <form action="update.php" method="POST">
              <div class="row">
                <div class="col-6">
                  <div class="mb-3">
                    <label for="nombre" class="form-label ">Nombre</label>
                    <input type="text" class="form-control" id="nombreu" name="nombreu" aria-describedby="email"
                      value="<?php echo $row['nombre'] ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label ">Email</label>
                    <input type="email" class="form-control" id="email " name="email" value="<?php echo $row['email'] ?>" 
                      required>
                  </div>
                  <div class="mb-3">
                    <label for="telefono" class="form-label ">Telefono</label>
                    <input type="text" class="form-control" id="telefono" name="telefono"
                    value="<?php echo $row['telefono'] ?>" required>
                  </div>
                </div>
                <div class="col-6">
                  <div class="mb-3">
                    <label for="documento" class="form-label ">Documento</label>
                    <input type="documento" class="form-control" id="documento" name="documento"
                    value="<?php echo $row['documento'] ?>" required>
                  </div>
                  <div class="mb-3">
                    <label for="direccion" class="form-label ">Direccion</label>
                    <input type="text" class="form-control" id="direccion" name="direccion"
                    value="<?php echo $row['direccion'] ?>"  required>
                  </div>
                  <div class="mb-3">
                    <label for="password" class="form-label ">Password</label>
                    <input type="password" class="form-control" id="password" name="password"
                    value="<?php echo $row['password'] ?>" required>
                  </div>

                </div>
              </div>
              <hr>
              <div class="text-center d-grid">
                <a href="http://localhost/proyectoPrueba/productos/update.php?id="<?php $row['id'] ?> class="btn btn-success" >Actualizar</a>
              </div>
            </form>
          </div>
  
        <?php } }
        
        ?>

        </div>
    </div>
    </div>
    </div>
    </body>
</html>