<?php

session_start();
if(!isset($_SESSION["Admin"])){
    //header('Location: ../admin/index.php');
}
//$_SESSION["Usuario"];


include './Configuracion.php';

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <title>Index Admin</title>
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
<nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
    <a class="navbar-brand" href="http://localhost/Proyecto/">Fruver's</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/Proyecto/">Inicio</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categorias
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="http://localhost/carrito/frutas.php">Frutas</a></li>
            <li><a class="dropdown-item" href="http://localhost/carrito/verduras.php">Verduras</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/Proyecto/vistas/contacto.php">contacto</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light me-5" type="submit">Search</button>
        <a  class="btn btn-outline-light "  href="http://localhost/Proyecto/usuario/registroU.php">Registrarse</a>
<a  class="btn btn-outline-light me-5 ms-2"  href="http://localhost/Proyecto/usuario/registroU.php">Registrarse</a>
    </div>
    
  </div>
  
</nav>
    <div class="col-sm-4 clearfix">
                    <a class="btn btn-secondary float-end rounded-0 mt-2 me-2" type="button" href="../usuario/cerrarSesion.php">
                        <i class="bi bi-box-arrow-right"></i>Cerrar Sesión
                    </a>
                </div>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading mt-5"> 

<ul class="nav nav-pills">
<li role="presentation"><a href="index.php" class="btn btn-outline-primary">Inicio</a></li>
  <li role="presentation" class="active"><a href="VerCarta.php" class="btn btn-outline-primary ms-3">Ver Carrito</a></li>
  <li role="presentation"><a href="Pagos.php" class="btn btn-outline-primary ms-3">Pagos</a></li>
  
</ul>

</div>

    <h1 class="mt-5">Productos</h1>
    <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="bi bi-cart"></i></a>
    <hr>

    <div class="container bg-success bg-opacity-10">
        <div class="row">
        <?php
        
        $query = $db->query("SELECT * FROM PRODUCTOS ORDER BY id DESC LIMIT 50");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>

            <div class="col-lg-4 col-sm-12 mt-3">
                <div class="card ms-5" style="width: 18rem; height: 290px">
                    <img <?php echo $row["imagen"]; ?> class="card-img-top" alt="...">
                    <div class="card-body">     
                        <h4 class=""><?php echo $row["nombre"]; ?></h4>
                        <h6 class="text-muted"><?php echo $row["descripcion"]; ?></h6>
                        <h6 class="text-muted"><?php echo 'Precio: '.'$'.$row["precio"]; ?></h6>
                        <h6 class="text-muted"><?php echo 'Categoria: '.$row["categoria"]; ?></h6>
                        <div class="d-grid">
                        <a class="btn btn-success mt-4" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar al carrito</a>
                        </div>
                    </div>
                </div>
            </div>
  

 


        <?php } }else{ ?>
        <p>Producto(s) no existe.....</p>
        <?php } 
        
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