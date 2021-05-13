<?php
include ("../apis/transferir.php");
?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>transferencia</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,700'>
    <link rel='stylesheet prefetch' href='https://raubarrera.neocities.org/cdpn/style.css'>
    <link rel="stylesheet" href="../css/style.css">
    <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.11.2/css/bootstrap-select.min.css'>
  </head>

  <body>
    <button onclick="location.href='../../index.html'"><< volver</button>
    <div>
      <h1 align="center";><tt><u><FONT COLOR="black">
          Transferencia entre usuarios
        </FONT></u></tt></h1>
      <form action="usua_transferir.php" method="post">
        <h2 align="center";><tt><FONT COLOR="black">
          Selecciona el usuario
        </FONT></tt></h2>
        <h3><tt><FONT COLOR="black">
          Usuarios:
        </FONT></tt></h3>
        <?php 
          listausuarios();
        ?>
        <p>
          <button id="enviar" name="enviar" type="submit" class="btn"> Seleccionar</button>
        </p>
      </form>   
    </div>
  </body>
</html>

