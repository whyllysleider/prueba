<?php
$id = $_POST['id'];
include ("../apis/usuarios.php");
?>
<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Usuarios</title>
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
  <button onclick="location.href='lista_usuarios.php'">volver</button>
</div>
<h1>Detalle del Usuario</h1>
<table class="table table-hover table-bordered results">
  <thead>
    <tr>
      <th class="col-md-4 col-xs-4">Nombre</th>
      <th class="col-md-4 col-xs-4">Apellidos</th>
      <th class="col-md-5 col-xs-5">Saldo actual</th>  
      <th class="col-md-5 col-xs-5">Recargar</th>  
    </tr>
  </thead>
  <tbody>
    <?php
    $listaUsuarios = usuario($id);
  //echo json_encode($listaUsuarios);
          
      $id             = $listaUsuarios[0]['id'];
      $nombre         = $listaUsuarios[0]['nombre'];
      $apellidos      = $listaUsuarios[0]['apellidos'];
      $saldoant        = $listaUsuarios[0]['saldo'];
    ?>
      <tr>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $apellidos; ?></td>
        <td><?php echo '$'.$saldoant; ?></td>
        <td><form action="../window/index.php" method="post" style="padding-bottom: 0px;padding-left: 0px;  padding-right: 0px;width: 100px;">
       <input type="hidden" name="saldo" value="si" />
       <input type="hidden" name="id" value="<?php echo $id?>" />
       <input type="hidden" name="saldoant" value="<?php echo $saldoant?>" />
       <input type="number" min="0" placeholder="saldo" name="saldo" value="" required />
       <input type="submit" value="Modificar" />
      </form></td>
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
