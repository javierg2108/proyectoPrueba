
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
            include 'menu.php';
        ?>
        
        <div class="container mt-5 bg-success bg-opacity-10">
            <div class="row">
                <div class="col-6">
                <form  action="#" method="POST" >
                          <div class="row">
                            <div class="col-6">
                                  <div class="mb-3">
                                    <label for="nombre" class="form-label ">Nombre</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" aria-describedby="email" placeholder="Ingrese su nombre" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="apellido" class="form-label ">Apellido</label>
                                    <input type="text" class="form-control" id="apellido " name="apellido" placeholder="Ingrese su apellido" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="email" class="form-label ">Email</label>
                                    <input type="email" class="form-control" id="emaill name="emaill placeholder="Ingrese el email" required>
                                  </div>
                                  </div>
                                  <div class="col-6">
                                  <div class="mb-3">
                                    <label for="telefono" class="form-label ">Teléfono</label>
                                    <input type="telefono" class="form-control" id="telefono" name="telefono" placeholder="Ingrese el codigo" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="mensaje" class="form-label ">Mensaje</label>
                                    <input type="text-area" class="form-control" id="mensaje" name="mensaje" placeholder="Ingrese el mensaje" required>
                                    
                                  </div>

                                  </div>
                                  </div>
                                  <hr>
                                  <div class="d-grid">
                                  <button type="submit" class="btn btn-success" data-bs-dismiss="modal">Enviar mensaje</button>
                                  <i class="bi bi-clock mt-3">Contestamos en menos de 24hrs</i>
                                  </div>
                                </form>
                </div>
                <div class="col-6 mt-4 ">
                <i class="bi bi-cart-fill ms-3"style="font-size: 30px;"></i>
                <i class="bi bi-facebook ms-3"style="font-size: 30px;"></i>
                <i class="bi bi-twitter ms-3"  style="font-size: 30px;"></i>
                <i class="bi bi-instagram ms-3"  style="font-size: 30px;"></i>
                <i class="bi bi-whatsapp ms-3"  style="font-size: 30px;"></i>
                <br>
                <br>
                <p><i class="bi bi-phone ms-3"  style="font-size: 20px;">3202147854</i></p>
                <p><i class="bi bi-envelope ms-3"  style="font-size: 20px;">correo@gmail.com</i></p>
                <p><i class="bi bi-geo-alt ms-3"  style="font-size: 20px;">Tunja</i></p>
                <p><i class="bi bi-clock-fill ms-3"  style="font-size: 20px;">L-V 09:00 - 17:00</i></p>
                </div>
            </div>
            

            
        </div>
        <div class="container mt-5"></div>
        <?php
            include 'footer.php';
        ?>
    </body>
</html>