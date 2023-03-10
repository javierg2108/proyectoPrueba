<?php

session_start();
if(!isset($_SESSION["Usuario"])){
    header('Location: ../usuario/usuario.php');
}

$_SESSION["Usuario"];


include 'Configuracion.php';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Index Usuario</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
    
    <style>
  
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    .btn{
      border-radius: 30px;
    }
    .btn:hover{
      color: green;
      background-color: white;
    }
    .precio{
      position: relative;
      
    }
    
    
    </style>
    
</head>

<body>

<nav class="navbar navbar-expand-lg bg-success navbar-dark ">
  <div class="container-fluid">
  <a class="navbar-brand ms-5" href="http://localhost/proyectoPrueba/">
      <img src="../img/logo2.png" alt="Logo fruver´s" width="40" height="40" class="d-inline-block align-text-center " style="border-radius: 1000px;">
      Fruver's
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/proyectoPrueba/">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/proyectoPrueba/carrito/frutas.php">Frutas</a></li>
            <li><a class="dropdown-item" href="http://localhost/proyectoPrueba/carrito/verduras.php">Verduras</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/proyectoPrueba/vistas/contacto.php">contacto</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light me-5" type="submit">Buscar</button>
        <a href="http://localhost/proyectoPrueba/usuario/index.php" class="me-5"><i  style="font-size: 30px;" class="bi bi-person-circle text-light"></i></a>
        
    </div>
    
  </div>
  
</nav>
    
<div class="container">
<div class="panel panel-default">
<div class="panel-heading mt-5"> 

<ul class="nav nav-pills">
<li role="presentation"><a href="index.php" class="btn btn-outline-primary"><i class="bi bi-house"></i>Inicio</a></li>
  <li role="presentation" class="active"><a href="VerCarta.php" class="btn btn-outline-primary ms-3"><i class="bi bi-cart"></i>Ver Carrito</a></li>
  <li role="presentation"><a href="Pagos.php" class="btn btn-outline-primary ms-3"><i class="bi bi-credit-card"></i>Pagos</a></li>
  
</ul>

</div>

    <h1 class="mt-5">Productos</h1>
    <a href="VerCarta.php" class="cart-link" title="Ver Carta"></a>
    <hr>
    <div class="container bg-success bg-opacity-10">
        <div class="row">
        <?php
        
        $query = $db->query("SELECT * FROM PRODUCTOS ORDER BY id ASC LIMIT 50");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>

            <div class="col-lg-4 col-sm-12 mt-3 p-2">
                <div class="card ms-4" style="width: 20rem; height: 500px">
                    <img src="<?php echo  $row["imagen"]; ?>"  class="card-img-top" alt="">
                    <div class="card-body">     
                    <h6 class=" rounded-pill  badge text-bg-danger text-dark"><?php echo '$'.$row["precio"].$row["cantidad"]; ?></h6>
                        <h4 class=""><?php echo $row["nombre"]; ?></h4>
                        <h6 class="text-muted "><?php echo $row["descripcion"]; ?></h6>
                        <h6 class="text-muted"><?php echo 'Categoria: '.$row["categoria"]; ?></h6>
                        <div class="d-grid ">
                        <a class="btn btn-success mt-5 mb-3" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
  
        <?php } }else{ ?>
        <p>No hay productos.....</p>
        <?php } 
        
        ?>

        </div>
    </div>
    </div>
    </div>
    </div>
    <div class=" mt-3">
    <?php
include '../vistas/footer.php';
    ?>
    </div>
    
</body>
</html>