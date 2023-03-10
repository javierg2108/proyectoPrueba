<!doctype html>
<html lang="es">
<head>
    <title>Administrador</title>
    <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
    
    <style>
   
   .container{
    margin-top: 50px;
    width: 80%;
   }

    </style>
</head>


  <body>

    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-lg bg-success">
  <div class="container-fluid">
  <a class="navbar-brand" href="http://localhost/proyectoPrueba/">
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
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="http://localhost/proyectoPrueba/carrito/usuariosRegistrados.php">Usuarios</a>
        </li>
       
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/proyectoPrueba/vistas/contacto.php">contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="http://localhost/proyectoPrueba/carrito/pedidos.php">Pedidos</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light me-5" type="submit">Buscar</button>
        <div class="col-sm-4 clearfix">
                    <a class="btn btn-secondary float-end rounded-0 mt-2 me-2" type="button" href="../admin/cerrarSesion.php">
                        <i class="bi bi-box-arrow-right"></i>Cerrar Sesión
                    </a>
                </div>
    </div>
    
  </div>
  
</nav>


    </header>

    <!-- Begin page content -->

<div class="container">
<h1>Productos registrados</h1>

<div class="row">
  <div class="col-12 col-md-12">
<!-- Contenido -->   

<ul class="list-group">
  <li class="list-group-item">
<form method="GET">
  <div class="form-row align-items-center">
    <div class="col-auto">
      <label class="sr-only" for="inlineFormInput">Productos</label>
      <input name="curso" type="text" class="form-control mb-2" id="inlineFormInput" placeholder="Ingrese un producto">  
      <input name="buscar" type="hidden" class="form-control mb-2" id="inlineFormInput" value="v">
    </div>
   
    <div class="col-auto">
      <button type="submit" class="btn btn-primary mb-2">Buscar Ahora</button>
    </div>
  </div>
</form>
  </li>

</ul>
<br>
<?php
include('conex.php');
$conn = new mysqli($servidor, $usuario, $password, $nombreBD);
if ($conn->connect_error) {
    die("la conexión ha fallado: " . $conn->connect_error);
}

if(isset($_GET["curso"])){
$pbu=$_GET["curso"];	
	}
	
if(isset($_GET["buscar"])){                  
$sqln=mysqli_query($conn, "SELECT t1.nombre, t1.descripcion, t1.precio,t1.codigo,  t1.categoria ,  t1.id,  t1.imagen  FROM productos t1 INNER JOIN  productos t2 ON t1.id=t2.id WHERE t2. nombre LIKE '%$pbu%' order by t1.id desc") or die(mysqli_error());
}
?>



<table class="table">
  <thead>
    <tr>

      <th scope="col">Nombre</th>
      <th scope="col">Descripción</th>
      <th scope="col">Precio</th>
      <th scope="col">Código</th>
      <th scope="col">Categoria</th>
      <th scope="col">Imagen</th>
      <th scope="col">Acción</th>
    </tr>
  </thead>
<?php
if(isset($_GET["buscar"])){ 
$n=0;
while ($dato=mysqli_fetch_array($sqln))
{	$n++;


echo"<tbody>";
echo"<tr>";
?>
<td class="td"><?php echo $dato["nombre"]; ?></td>
<td class="td"><?php echo $dato["descripcion"]; ?></td>
<td class="td"><?php echo '$'.$dato["precio"]; ?></td>
<td class="td"><?php echo$dato["codigo"]; ?></td>
<td class="td"><?php echo $dato["categoria"]; ?></td>
<td><img src="<?php echo  $dato["imagen"]; ?>"  width="80px"  alt=""></td> 

<td><a type="button" class="btn btn-success" href="editar.php?id=<?php echo $dato['id'];?>">Editar</a>
<?php
echo"</tr>";
echo"  </tbody>";
}
}
?>

</table>
<p></p>


<p></p>


<!-- Fin Contenido --> 
</div>
</div><!-- Fin row -->
</div><!-- Fin container -->
    <footer class="footer">
      <div class="container">
        <span class="text-muted"><p>Códigos <a href="https://www.baulphp.com/" target="_blank">BaulPHP</a></p></span>
      </div>
    </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/js/vendor/popper.min.js"></script>
    <script src="dist/js/bootstrap.min.js"></script>
    </body>
</html>