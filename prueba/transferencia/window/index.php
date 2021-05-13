<?php
include ("../apis/transferir.php");

$transferencia = $_POST['transferencia'];

$idUsu1 = $_POST['idUsu1'];
$saldoIni1 = $_POST['saldoUsu1'];
$saldoFin1 = $saldoIni1-$transferencia;

echo $idUsu1;
echo $saldoFin1;

$idUsu2 = $_POST['idUsu2'];

$listaUsuarios   = usuario($idUsu2);
$saldoIni2       = $listaUsuarios[0]['saldo'];

$saldoFin2 = $saldoIni2 + $transferencia;



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <title>Window alert</title>
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
</head>

<body>

    <div class="window-notice" id="window-notice">
        <div class="content">
            <?php
             $mensaje = transferir($idUsu1,$saldoFin1,$idUsu2,$saldoFin2);
            ?>
            <div class="content-text"><?php echo $mensaje ?></div>
            <div class="content-buttons"><a href="../vistas/ingreso_transferencia.php" >Aceptar</a></div>
        </div>
    </div>
    <!-- <script src="script.js"></script>  -->

</body>

</html>