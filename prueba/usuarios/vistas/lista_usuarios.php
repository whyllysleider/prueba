<?php
include ("../apis/usuarios.php");
?>
<!DOCTYPE html>
<html lang="es" >
<head>
  <meta charset="UTF-8">
  <title>Usuarios</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css'><link rel="stylesheet" href="../css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div>
    <button onclick="exportTableToExcel('usuarios')" class="btn btn-default btn-lg">
      <span class="glyphicon glyphicon-save"> Excel</span>
    </button>
</div>
<div class="form-group pull-right">
    <input type="text" class="search form-control" placeholder="Buscar">
</div>
<span class="counter pull-right"></span>
<table class="table table-hover table-bordered results" id="usuarios">
  <thead>
    <tr>
      <th>ID</th>
      <th class="col-md-4 col-xs-4">Nombre</th>
      <th class="col-md-4 col-xs-4">Apellidos</th>
      <th class="col-md-5 col-xs-5">Cedula</th>      
      <th class="col-md-2 col-xs-2">Detalle</th>
    </tr>
    <tr class="warning no-result">
      <td colspan="4"><i class="fa fa-warning"></i>Sin resultados</td>
    </tr>
  </thead>
  <tbody>
    <?php
    $listaUsuarios = listausuarios();
    
    for ($i=0; $i < count($listaUsuarios); $i++) { 
      
      $id              = $listaUsuarios[$i]['id'];
      $nombre          = $listaUsuarios[$i]['nombre'];
      $apellidos       = $listaUsuarios[$i]['apellidos'];
      $cedula          = $listaUsuarios[$i]['cedula'];

    ?>
      <tr>
        <th scope="row"><?php echo $id; ?></th>
        <td><?php echo $nombre; ?></td>
        <td><?php echo $apellidos; ?></td>
        <td><?php echo $cedula; ?></td>
        <td><form action="saldo_usuario.php" method="post" style="padding-bottom: 0px;padding-left: 0px;  padding-right: 0px;width: 100px;">
           <input type="hidden" name="id" value="<?php echo $listaUsuarios[$i]['id'] ?>" />           
           <input type="submit" value="recargar" />
          </form>
        </td>
       
      </tr>
    <?php
    }
    ?>
    
  </tbody>
</table>

<button onclick="location.href='../../index.html'">Inicio</button>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script><script  src="../scripts/script.js"></script>
  <script>
    function exportTableToExcel(usuarios, filename = 'usuarios'){
    var downloadLink;
    var dataType = 'application/vnd.ms-excel';
    var tableSelect = document.getElementById(usuarios);
    var tableHTML = tableSelect.outerHTML.replace(/ /g, '%20');
    
    // Specify file name
    filename = filename?filename+'.xls':'excel_data.xls';
    
    // Create download link element
    downloadLink = document.createElement("a");
    
    document.body.appendChild(downloadLink);
    
    if(navigator.msSaveOrOpenBlob){
        var blob = new Blob(['ufeff', tableHTML], {
            type: dataType
        });
        navigator.msSaveOrOpenBlob( blob, filename);
    }else{
        // Create a link to the file
        downloadLink.href = 'data:' + dataType + ', ' + tableHTML;
    
        // Setting the file name
        downloadLink.download = filename;
        
        //triggering the function
        downloadLink.click();
    }
}
  </script>

</body>
</html>
