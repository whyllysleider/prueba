<?php

function listausuarios()
{ 
    include '../../conexion/conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql= "SELECT  * FROM usuarios";
	//    echo $sql;
	echo "<select name='id' class='selectpicker' data-show-subtext='true' data-live-search='true'>";
	echo "<option value ='0' selected>...Seleccione...</option>"; 
	if ($resul_usu = mysqli_query($conn, $sql)) 
	{
		while ($rowusu = mysqli_fetch_assoc($resul_usu)) 
		{
			$des=$rowusu["nombre"]." ".$rowusu["apellidos"];
        	$cons=$rowusu["id"];
        	echo "<option value='$cons'>$des</option>";
		}
	}
	
    echo "</select>"; 
}
function usuario($id)
	{
		include '../../conexion/conn.php';

		  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		  // Check connection
		  if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		  }
		$sql_usuarios = "SELECT * FROM usuarios where id = '$id'";

		if ($resul_usuarios = mysqli_query($conn, $sql_usuarios)) 
		{

		    /* obtener array asociativo */
			while ($rowUsuarios = mysqli_fetch_assoc($resul_usuarios)) 
			{
					$listaUsuarios[] = $rowUsuarios;

			}
		}
	return $listaUsuarios;
}

function usutrasn($id)
{ 
    include '../../conexion/conn.php';

	$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
	if (!$conn)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	$sql= "SELECT  * FROM usuarios WHERE id <> '$id' ";
	//    echo $sql;
	echo "<select name='idUsu2' class='selectpicker' data-show-subtext='true' data-live-search='true'>";
	// echo "<option value ='0' selected>...Todos...</option>"; 
	if ($resul_usu = mysqli_query($conn, $sql)) 
	{
		while ($rowusu = mysqli_fetch_assoc($resul_usu)) 
		{
			$des=$rowusu["nombre"]." ".$rowusu["apellidos"];
        	$cons=$rowusu["id"];
        	echo "<option value='$cons'>$des</option>";
		}
	}
	
    echo "</select>"; 
}

function transferir($idUsu1,$saldoFin1,$idUsu2,$saldoFin2)
	{
		include '../../conexion/conn.php';

		  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		  // Check connection
		  if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		  }

		$sql_modificar1 = "UPDATE usuarios SET saldo = '$saldoFin1'
						  WHERE id = '$idUsu1'";

		if (mysqli_query($conn, $sql_modificar1)) {
			
      		$sql_modificar = "UPDATE usuarios SET saldo = '$saldoFin2'
						  WHERE id = '$idUsu2'";

					if (mysqli_query($conn, $sql_modificar)) {
		      		$mensaje = "Se ha transferido correctamente";
					  } else {
					$mensaje = "Error actualizando: " . mysqli_error($conn);
					 }
			  } else {
			$mensaje = "Error actualizando: " . mysqli_error($conn);
			 }				  


		

	return $mensaje;
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>  