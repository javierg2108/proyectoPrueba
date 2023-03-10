<!DOCTYPE html>
<html>
    <head>
        <title>Inicio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="./css/bootstrap.min.css" rel="stylesheet">
        <link href="./libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="./js/bootstrap.bundle.min.js"></script>
         <style>
            #img:hover{
              transform: scale(1.1);
              
            }
         </style>
    </head>
    <body >
        <!--Código para el menú-->
        <?php
            include './vistas/menu.php';
        ?>

<!--Slider
<div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active "data-bs-interval="10000">
      <img src="./img/frutas1.jpg" class="d-block w-100" alt="frutas y verduras">
      <div class="carousel-caption d-none d-md-block">
        <h5>Productos</h5>
        <p>Productos frescos desde la comodidad de tu casa  </p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/shopping.png" class="d-block w-100" alt="entregas">
      <div class="carousel-caption d-none d-md-block">
        <h5>Servicios</h5>
        <p>Entregas a domicilio seguras.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./img/frutas2.jpg" class="d-block w-100" alt="estantes con frutas">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
            <hr>-->
            <div class="container-fluid mt-5 bg-secondary bg-opacity-10  p-5 " width="auto">
 
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-4 col-sm-12 mt-3" >
                        <div class="card"style="width:350px " >
                        <img class="card-img-top" src="img/grapes.jpg" alt="Racimo de uvas">
                                <div class="card-body">
                                  <hr>
                                <p class="class-text">La uva actúa como un potente antioxidante natural,
                                   de manera que ayuda a combatir el envejecimiento prematuro
                                    creado por los radicales libres. También es un alcalinizante, de manera que purifica nuestra sangre</p>
                                    <div class="d-grid">
                                    <a href="usuario/registroU.php" class="btn btn-success d-flex justify-content-center" type="button" onclick="alerta()">Comprar</a>
                             
                                <button type="button" class="btn btn-primary orderBtn mt-2" data-bs-toggle="modal" data-bs-target="#m1"><i class="bi bi-eye"></i>
                                  Ver más
                                </button>
                                </div>
                               <script>
                                function alerta(){
                                  alert("Debe registrarse o iniciar sesión para realizar esta acción")
                                }
                               </script>

                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mt-3">
                        <div class="card "style="width:350px">
                        <img class="card-img-top" src="img/apples.jpg" alt="dos manzanas">
                                <div class="card-body">
                                  <hr>
                                <p class="class-text">La manzana es la fruta ideal para los más pequeños por sus aportes nutritivos.
                                   Además, ayuda a prevenir enfermedades como el resfriado, 
                                   ya que nos aporta vitaminas A, C, calcio y fibra.</p>
                               <div class="d-grid">
                               <a href="usuario/registroU.php" class="btn btn-success d-flex justify-content-center" type="button" onclick="alerta()">Comprar</a>
                                
                                <button type="button" class="btn btn-primary orderBtn mt-2 " data-bs-toggle="modal" data-bs-target="#m2"><i class="bi bi-eye"></i>
                                  Ver más
                                </button>
                                </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-sm-12 mt-3">
                        <div class="card "style="width:350px">
                        <img class="card-img-top" src="img/stawberries.jpg" alt="tres fresas">
                                <div class="card-body">
                                  <hr>
                                <p class="class-text">Contienen antocianinas, las cuales son pigmentos que ayudan a reducir el colesterol 
                                  y el riesgo de sufrir hipertensión. 
                                  Son muy ricas en agua, vitaminas, antioxidantes, potasio y calcio. </p>
                                <div class="d-grid">
                                 <a href="usuario/registroU.php" class="btn btn-success d-flex justify-content-center" type="button" onclick="alerta()">Comprar</a>
                              
                                <button type="button" class="btn btn-primary orderBtn mt-2" data-bs-toggle="modal" data-bs-target="#m3"><i class="bi bi-eye"></i>
                                  Ver más
                                </button>
                                </div>
                    </div>
                </div>  
            </div>
            </div>
      </div>
    </div>
      <hr>

      <div class="container-fluid ">
        <div class="row">
          <div class="col-lg-6 col-sm-12">
            <h2 class="text-muted text-star p-5">Somos una comunidad que vela por la satisfacción de sus clientes</h2>
          </div>
             <div class="col-lg-3 col-sm-12">
             <i class="bi bi-person-plus-fill " style="font-size: 4rem; color: #0BE30F"></i>
             <h3>1M usuarios <br> registrados</h3>
             </div>
              <div class="col-lg-3 col-sm-12">
              <i class="bi bi-phone-fill " style="font-size: 4rem; color: #0BE30F"></i>
             <h3>Uso desde <br>Cualquier dispositivo</h3>
             </div>
              </div>
             </div>
        </div>
      </div>


            <hr>
           <!-- <div class="container-fluid mt-5 bg-secondary bg-opacity-10  p-5" width="auto">
              <h3 class="text-success">Nuestras promociones</h3>
                <div class="container ">
                    <div class="row ">
                        <div class="col-lg-3 col-sm-12 mt-3" >
                        <div class="card"style="width:250px " >
                                <div class="card-body">
                                  <h3 class="text-center">Prom 1</h3>
                                  <hr>
                                <p class="class-text">Conoce más sobre esta promoción
                                  dando click en el boton.</p>
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#modalImage1" style="text-decoration: none">
                                 <button class="btn btn-success d-flex justify-content-center" type="button">Ver promoción</button>
                                </a>

                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 mt-3">
                        <div class="card "style="width:250px">
                                <div class="card-body">
                                  <h3 class="text-center">Prom 2</h3>
                                  <hr>
                                <p class="class-text">Conoce más sobre esta promoción
                                  dando click en el boton..</p>
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#modalImage1" style="text-decoration: none">
                                 <button class="btn btn-success d-flex justify-content-center" type="button">Ver promoción</button>
                                </a>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-12 mt-3">
                        <div class="card "style="width:250px">
                                <div class="card-body">
                                  <h3 class="text-center">Prom 3</h3>
                                  <hr>
                                <p class="class-text">Conoce más sobre esta promoción
                                  dando click en el boton..</p>
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#modalImage1" style="text-decoration: none">
                                 <button class="btn btn-success d-flex justify-content-center" type="button">Ver promoción</button>
                                </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-12 mt-3">
                        <div class="card "style="width:250px">
                                <div class="card-body">
                                  <h3 class="text-center">Prom 4</h3>
                                  <hr>
                                <p class="class-text">Conoce más sobre esta promoción
                                  dando click en el boton..</p>
                                <a href="#"  data-bs-toggle="modal" data-bs-target="#modalImage1" style="text-decoration: none">
                                 <button class="btn btn-success d-flex justify-content-center" type="button">Ver promoción</button>
                                </a>
                    </div>
                </div>
            </div>
            </div>
      </div>
    </div>-->
    <div class="row p-5">
      <h3 class="text-center">Estos son algunos de nuestros productos</h3><br><br><br>
  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img id="img"
      src="./img/carrots.jpg"
      class="w-100 shadow-1-strong rounded mb-4" style
      alt="Boat on Calm Water"
    />

    <img id="img"
      src="./img/grapes.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img id="img"
      src="./img/mandarinas.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />
    

    <img id="img"
      src="./img/potatoes.jpg"
      class="w-100 shadow-1-strong rounded mb-4 mt-4"
      alt=""
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img id="img"
      src="./img/stawberries.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />

    <img id="img"
      src="./img/piña.jpg"
      class="w-100 shadow-1-strong rounded mb-4"
      alt=""
    />
  </div>
</div>

</div>

<!-- Modal -->
<div class="modal fade" id="m1" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div class="container">
        <div class="row">
          <div class="col-10">
          <h1>UVA</h1>
      
      </div>
            <div class="col-2">
             
            <button type="button" class="btn-close btn-danger mt-3 ms-2 " data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            </div>
           
      </div>
    </div>
    <p class="text-center">ijhqerouiwhu</p>
  </div>
</div>
</div>

<div class="modal fade" id="m2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div class="container">
      <div class="row">
          <div class="col-10">
          <h1>MANZANA</h1>
      
      </div>
            <div class="col-2">
             
            <button type="button" class="btn-close btn-danger mt-3 ms-2 " data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            </div>
    
      </div>
    </div>
    <p class="text-center">ijhqerouiwhu</p>
  </div>
</div>
</div>

<div class="modal fade" id="m3" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div class="container">
        
      <div class="row">
          <div class="col-10">
          <h1>FRESA</h1>
      
      </div>
            <div class="col-2">
             
            <button type="button" class="btn-close btn-danger mt-3 ms-2 " data-bs-dismiss="modal" aria-label="Close"></button>
            </div> 
            </div> 
           
    
      </div>
    </div>
    <p class="text-center">ijhqerouiwhu</p>
  </div>
</div>
</div>



<?php
  include './vistas/footer.php';
?>

</body>
</html>