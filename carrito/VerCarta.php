<?php
include 'La-carta.php';
$cart = new Cart;

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../libs/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
        <script src="../js/bootstrap.bundle.min.js"></script>
    <style>
    .container{padding: 20px;}
    input[type="number"]{width: 20%;}
    .btn{
        border-radius: 30px;
    }
    </style>
    <script>
    function updateCartItem(obj,id){
        $.get("cartAction.php", {action:"updateCartItem", id:id, qty:obj.value}, function(data){
            if(data == 'ok'){
                location.reload();
            }else{
                alert('Cart update failed, please try again.');
            }
        });
    }
    </script>
</head>
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

<div class="panel-body mt-5">


    <h1>Carrito de compras</h1>
    <table class="table">
    <thead>
        <tr>
            <th>nombre</th>
            <th>Precio</th>
            <th>Cantidad</th>
            <th>Sub total</th>
            
            <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if($cart->total_items() > 0){
            $cartItems = $cart->contents();
            foreach($cartItems as $item){
        ?>
        <form action="facturas.php" method="POST">
        <tr>
            <td name="nombre"><?php echo $item["nombre"]; ?></td>
            <td name="precio"><?php echo '$'.$item["precio"]; ?></td>
            <td name="cantidad"><input type="number" class="form-control text-center" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')"></td>
            <td name="total"><?php echo '$'.$item["subtotal"]; ?></td>
            <td>
                <a href="AccionCarta.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>" class="btn btn-danger" onclick="confirm('Confirma eliminar?')"><i class="bi bi-trash3-fill"></i></a>
            </td>
        </tr>
        </form>
        <?php } }else{ ?>
        <tr><td colspan="5"><p>No hay productos seleccionados.....</p></td>
        <?php } ?>
    </tbody>
    <tfoot>
        <tr>
            <td><a href="index.php" class="btn btn-warning"><i class="bi bi-arrow-left"></i> Continue Comprando</a></td>
            <td colspan="2"></td>
            <?php if($cart->total_items() > 0){ ?>
            <td class="text-center"><strong>Total <?php echo '$'.$cart->total(); ?></strong></td>
            <td><a href="Pagos.php" class="btn btn-success btn-block">Pagos</a></td>
            <?php } ?>
        </tr>
    </tfoot>
    </table>
    
    </div>
 </div>
 
</div>

</body>
</html>