<?php
$saldo = $_POST['saldo'];
$saldoant = $_POST['saldoant'];
$id = $_POST['id'];
$saldo = $saldo + $saldoant;
include ("../apis/usuarios.php");
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
             $mensaje = modificar($saldo,$id);
            ?>
            <div class="content-text"><?php echo $mensaje ?></div>
            <div class="content-buttons"><a href="../vistas/lista_usuarios.php" >Aceptar</a></div>
        </div>
    </div>
    <!-- <script src="script.js"></script>  -->

</body>

</html>