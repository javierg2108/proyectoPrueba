<?php

include 'Configuracion.php';


include 'La-carta.php';
$cart = new Cart;


if($cart->total_items() <= 0){
    header("Location: index.php");
}


?>
<!DOCTYPE html>
<html >
<head>
<title>Inicio</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
   <style>
    .container{padding: 20px;}
    .table{width: 65%;float: left;}
    .shipAddr{width: 30%;float: left;margin-left: 30px;}
    .footBtn{width: 95%;float: left;}
    .orderBtn {float: right;}
    .table: {background-color: #f2f2f2};
    </style>
</head>
<body>
<div class="container">
    <div class="panel panel-default">
        <div class="panel-heading mt-5"> 

            <ul class="nav nav-pills">
                <li role="presentation"><a href="index.php" class="btn btn-outline-primary">Inicio</a></li>
                <li role="presentation" class="active"><a href="VerCarta.php" class="btn btn-outline-primary ms-3">Ver Carrito</a></li>
                <li role="presentation"><a href="Pagos.php" class="btn btn-outline-primary ms-3">Pagos</a></li>
            </ul>
        </div>
    </div>
    


<div class="panel-body mt-5">
    <h1>Vista previa del Pedido</h1>
    <table class="table table-striped mt-3">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>

        <tr>
            <td><?php echo $item["nombre"]; ?></td>
            <td><?php echo '$'.$item["precio"]; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo '$'.$item["subtotal"]; ?></td>
        </tr>
    
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carta......</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo "$".$cart->total(); ?></strong></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    <?php
        

        ?>
    <div class="shipAddr">
        <h4>Detalles de envío</h4>
        <p><?php echo "Usuario: ". $_SESSION['Usuario']; ?></p>
        <?php
       $user = $_SESSION['Usuario'];
        include '../carrito/Configuracion.php';
        $query = $db->query("SELECT * FROM usuarios WHERE id=".$user);
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
                echo '<strong>Nombre: </strong>'. $row['nombre']."</br>";
                echo '<strong>Email: </strong>'. $row['email']."</br>";
                echo '<strong>Documento: </strong>'. $row['documento']."</br>";
                echo '<strong>Dirección: </strong>'. $row['direccion'];
        ?>
        <?php
            }}
        ?>
 
        
    </div>
            
    <div class="footBtn">
        <a href="index.php" class="btn btn-warning"><i class="glyphicon glyphicon-menu-left"></i> Continue Comprando</a>
        <a href="AccionCarta.php?action=placeOrder" class="btn btn-success orderBtn ms-2" onclick="pedido();">Realizar pedido <i class="bi bi-cart"></i></a>
   
            
<!-- Button trigger modal -->
<div class="container ms-4">
<button type="button" class="btn btn-primary orderBtn " data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="bi bi-receipt"></i>
  Generar factura
</button>
</div>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      <div class="container">
        <div class="row">
            <div class="col-8">
            <h1>Factura</h1>
            </div> 
            <div class="col-4">
            <a class="navbar-brand" href="http://localhost/proyectoPrueba/">
      <img src="../img/logo2.png" alt="Logo fruver´s" width="40" height="40" class="d-inline-block align-text-center " style="border-radius: 1000px;">
      Fruver's
    </a>
            </div> 
        </div>
    
    
    <?php echo 'fecha factura: '.date("Y-m-d"); ?>
    
</div>  
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="container ms-5">
      <strong>Información de usuario</strong><br>
      <?php
       $user = $_SESSION['Usuario'];
        include '../carrito/Configuracion.php';
        $query = $db->query("SELECT * FROM usuarios WHERE id=".$user);
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
                echo '<strong>Nombre </strong>------------------'. $row['nombre']."</br>";
                echo '<strong>Email </strong>---------------------'. $row['email']."</br>";
                echo '<strong>Documento </strong>--------------'. $row['documento']."</br>";
                echo '<strong>Dirección </strong>-----------------'. $row['direccion'];
            }}
        ?>
        
       
        </div>
      <div class="modal-body d-flex justify-content-center">
      <table class="table border-none">
    <thead>
        <tr>
            <th>Producto</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Valor total</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>

        <tr>
            <td><?php echo $item["nombre"]; ?></td>
            <td><?php echo '$'.$item["precio"]; ?></td>
            <td><?php echo $item["qty"]; ?></td>
            <td><?php echo  '$'.$item["subtotal"]; ?></td>
        </tr>
    
    
        <?php } }else{ ?>
        <tr><td colspan="4"><p>No hay articulos en tu carta......</p></td>
        <?php } ?>
    </tbody>
    
    <tfoot>
        <tr>
            <td colspan="3"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo "$".$cart->total(); ?></strong></td>
            <?php } ?>
        </tr>
       
    </tfoot>
    </table>
    
            </div>
          
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <a href="" type="button" class="btn btn-secondary" >Descargar</a>
      </div>
    </div>
  </div>
</div>
</div>
        </div>
 </div>
</div>
</div>  
     <script>
        function pedido(){
            alert ("Pedido registrado exitosamente."."<br>".
            "Gracias por su compra!");
        }
     </script>           
</body>

</html>