<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://necolas.github.io/normalize.css/5.0.0/normalize.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
  </head>
  <body>
      <div class="formulario">
            <h2>Pagos con Paypal</h2>
            <?php 
                $resultado = $_GET['exito'];
                $payment = $_GET['paymentId'];

                if($resultado == 'true'){
                    echo 'El pago se realizó con éxito <br>';
                    echo 'El id es ' . $payment;
                }
                else{
                    echo 'El pago no se realizó';
                }
            ?>
        </div>
  </body>
</html>