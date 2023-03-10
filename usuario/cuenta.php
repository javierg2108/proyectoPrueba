
<?php
      session_start();
      if(!isset($_SESSION["Usuario"])){

      }
 $user=$_SESSION['Usuario'];
 

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
       
    <?php
    include '../vistas/menuU.php';
        include '../carrito/Configuracion.php';
        $query = $db->query("SELECT * FROM usuarios WHERE id=".$user);
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
  
        <div class="row">
            <div class="col-6 ">
                <div class="container d-flex justify-content-center mt-3 p-5">
        <h1>MIS PEDIDOS</h1>
        </div>
        </div>
        <div class="col-6">
<div class="container p-5 mt-5">
<div class="card-body mt-5  me-5">
            
			<form class="form-horizontal" method="POST" action="update.php" autocomplete="off">
				<div class="form-group">
					<label for="nombre" class="col-sm-2 control-label">Nombre</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
					</div>
				</div>
				
				<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" />
				
				<div class="form-group">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" value="<?php echo $row['email']; ?>"  required>
					</div>
				</div>
                <div class="form-group">
					<label for="email" class="col-sm-2 control-label">Documento</label>
					<div class="col-sm-10">
						<input type="documento" class="form-control" id="documento" name="documento" placeholder="documento" value="<?php echo $row['documento']; ?>"  required>
					</div>
				</div>
				
				<div class="form-group">
					<label for="telefono" class="col-sm-2 control-label">Telefono</label>
					<div class="col-sm-10">
						<input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="<?php echo $row['telefono']; ?>" >
					</div>
				</div>
                <div class="form-group">
					<label for="email" class="col-sm-2 control-label">Direccion</label>
					<div class="col-sm-10">
						<input type="direccion" class="form-control" id="direccion" name="direccion" placeholder="direccion" value="<?php echo $row['direccion']; ?>"  required>
					</div>
				</div>
				
			
			
				

				
				<div class="form-group">
					<div class="col-sm-offset-2 col-sm-10">
						<a href="http://localhost/proyectoPrueba/usuario/update.php" class="btn btn-primary mt-2">Guardar</a>
					</div>
				</div>
			</form>
          </div>
          </div>  
          </div>
          </div>  
        <?php } }
        
        ?>

        </div>
    </div>
    </div>
    </div>
    <?php 
        include '../vistas/footer.php';
        ?>

    </body>
</html>