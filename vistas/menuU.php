<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="../js/bootstrap.bundle.min.js"></script>
  <style>
    .btn{
      border-radius: 30px;
    }
    #cerrar{
      border-radius: 30px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-success ">
  <div class="container-fluid">
  <a class="navbar-brand ms-5" href="http://localhost/proyectoPrueba/">
      <img src="http://localhost/proyectoPrueba/img/logo2.png" alt="Logo fruver´s" width="40" height="40" class="d-inline-block align-text-center " style="border-radius: 1000px;">
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
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/proyectoPrueba/vistas/contacto.php">contacto</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2 mt-1" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light me-5 mt-1" type="submit">Buscar</button>
        
    </div>
    <div class="col-sm-4 clearfix">
                    <a id="cerrar" class="btn btn-outline-light float-end rounded-0  me-3" type="button" href="../usuario/cerrarSesion.php">
                        <i class="bi bi-box-arrow-right"></i>Cerrar Sesión
                    </a>
                    
                </div>
                <a href="http://localhost/proyectoPrueba/carrito/index.php" class="btn btn-outline-light me-3" ><i class="bi bi-cart"></i>Comprar</a> 
                <a href="http://localhost/proyectoPrueba/usuario/index.php" class="me-3"><i  style="font-size: 30px;" class="bi bi-person-circle text-light"></i></a>
  </div>
  
</nav>
</body>
</html>