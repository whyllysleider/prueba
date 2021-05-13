<?php

function listausuarios()
	{
		include '../../conexion/conn.php';

		  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		  // Check connection
		  if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		  }
		$sql_usuarios = "SELECT * FROM usuarios";

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

function modificar($saldo,$id)
	{
		include '../../conexion/conn.php';

		  $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

		  // Check connection
		  if (!$conn) {
		    die("Connection failed: " . mysqli_connect_error());
		  }

		$sql_modificar = "UPDATE usuarios SET saldo = '$saldo'
						  WHERE id = '$id'";

			if (mysqli_query($conn, $sql_modificar)) {
      		$mensaje = "Se ha recargado correctamente";
			  } else {
			$mensaje = "Error actualizando: " . mysqli_error($conn);
			 }

	return $mensaje;
}

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>  