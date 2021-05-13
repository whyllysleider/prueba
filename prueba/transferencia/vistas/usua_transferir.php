<?php
$id = $_POST['id'];
include ("../apis/transferir.php");
?>
<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>transferencia</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
    <link rel='stylesheet prefetch' href='https://raubarrera.neocities.org/cdpn/style.css'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
</head>
<body>
<div>
  <button onclick="location.href='ingreso_transferencia.php'">volver</button>
</div>
<h1>Usuario</h1>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th class="col-md-4 col-xs-4">Nombre</th>
      <th class="col-md-4 col-xs-4">Apellidos</th>
      <th class="col-md-5 col-xs-5">Saldo actual</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    $listaUsuarios = usuario($id);
  //echo json_encode($listaUsuarios);
          
      $id             = $listaUsuarios[0]['id'];
      $nombre         = $listaUsuarios[0]['nombre'];
      $apellidos      = $listaUsuarios[0]['apellidos'];
      $saldoUsu1       = $listaUsuarios[0]['saldo'];
    ?>
      <tr>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $apellidos; ?></td>
        <td><?php echo '$'.$saldoUsu1; ?></td>
      </tr>
    <?php
    

    ?>    
  </tbody>
</table>
<h1>Transferencia a otro usuario</h1>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th class="col-md-4 col-xs-4">Usuario</th>
      <th class="col-md-5 col-xs-5">Transferir</th>  
    </tr>
  </thead>
  <tbody>
      <tr>
         
      <form action="../window/index.php" method="post" style="padding-bottom: 0px;padding-left: 0px;  padding-right: 0px;width: 100px;">
       <td><?php usutrasn($id); ?></td> 
       <input type="hidden" name="saldo" value="si" />
       <input type="hidden" name="idUsu1" value="<?php echo $id?>" />
       <input type="hidden" name="saldoUsu1" value="<?php echo $saldoUsu1?>" />
       <td><input type="number" min="0" required max="<?php echo $saldoUsu1; ?>" placeholder="saldo" name="transferencia" value="" />
       <input type="submit" value="Transferir" />
       </td>
      </form>
      </tr>
    <?php
    

    ?>    
  </tbody>
</table>

<button onclick="location.href='../../index.html'">Inicio</button>

<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../scripts/script.js"></script>

</body>
</html>
