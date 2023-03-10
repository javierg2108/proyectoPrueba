<?php

session_start();
if (!isset($_SESSION["Usuario"])) {
  header('Location: ../admin/admin.php');
}
$_SESSION["Usuario"];


include 'Configuracion.php';

?>
<!DOCTYPE html>
<html lang="es">

<head>
  <title>Index Usuario</title>
  <meta charset="UTF-8">
  </meta>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <script src="../js/bootstrap.bundle.min.js"></script>

  <style>
    .container {
      padding: 20px;
    }

    .cart-link {
      width: 100%;
      text-align: right;
      display: block;
      font-size: 22px;
    }
  </style>
</head>

<body >

  <nav class="navbar navbar-expand-lg bg-success">
    <div class="container-fluid">
      <a class="navbar-brand" href="http://localhost/proyectoPrueba/">Fruver's</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
        aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="http://localhost/proyectoPrueba/">Inicio</a>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="http://localhost/Proyecto/vistas/contacto.php">contacto</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-light me-5" type="submit">Search</button>
          <div class="col-sm-4 clearfix">
            <a class="btn btn-secondary float-end rounded-0 mt-2 me-2" type="button" href="../usuario/cerrarSesion.php">
              <i class="bi bi-box-arrow-right"></i>Cerrar Sesión
            </a>
          </div>
      </div>

    </div>

  </nav>

  <!--<div class="container">
<div class="panel panel-default">
<div class="panel-heading mt-5"> -->
  </div>
  <div class="row">
    <div class="">
      <h1 class="mt-5 text-center">Usuarios Registrados</h1>
    </div>

  </div>
  <div class="container">
    <table class="table table-striped " id="tabla">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Email</th>
          <th>Telefono</th>
          <th>Documento</th>
          <th>Dirección</th>
        </tr>
      </thead>
      <tbody>
        <hr>
        <div class="row">
          <?php
        $query = $db->query("SELECT * FROM USUARIOS ORDER BY id DESC LIMIT 50");
        if ($query->num_rows > 0) {
          while ($row = $query->fetch_assoc()) {
        ?>
          <td class="">
            <?php echo $row["nombre"]; ?>
          </td>
          <td class="">
            <?php echo $row["email"]; ?>
          </td>
          <td class="">
            <?php echo $row["telefono"]; ?>
          </td>
          <td class="">
            <?php echo $row["documento"]; ?>
          </td>
          <td class="">
            <?php echo $row["direccion"]; ?>
          </td>
      </tbody>

  </div>
  </div>

  </div>
  </div>
  <?php }
        } else { ?>
  <p>No hay usuarios registrados.....</p>
  <?php }

        ?>



  </table>
  </div>
  <?php
    include '../vistas/footer.php';
    ?>

</body>

</html>