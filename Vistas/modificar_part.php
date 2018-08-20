<?php 
session_start();
if (@!$_SESSION['Usuario']) {
	header ("location: http://localhost/html/Vertigo/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Estilo.css">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<title>Verde Vertigo</title>
</head>
<body>
	<div class="container">

		<?php include('Navbar.php') ?>
			  	
		</nav>

<!-- CONTENIDO PAGINA-->

<br/><br/>

			<table align="center" border="0" width="50%" cellpadding="0">

						<?php

							$Rut=$_REQUEST['Rut'];
							
							$conexion= new mysqli('localhost', 'root', 'Pablo1994', 'vertigo');
							
							$query="SELECT * FROM concursante WHERE Rut='$Rut' ";
							$resultado= $conexion->query($query);
							$row=$resultado->fetch_assoc();
						?>

					<form action="modificar_proceso_part.php?Rut=<?php echo $row['Rut']; ?>" method="post">
						

				<h4 align="center">Modificar datos de participantes</h4><br>
				<tr>
					<td align="left"><label for="Nombres">Nombres:</label></td>
					<td><br><input class="form-control" required="Nombres" type="text" name="Nombres" placeholder="Escriba sus nombres" value="<?php echo $row['Nombres']; ?> " /></td>
				</tr>
				<tr>
					<td align="left"><label for="Paterno">Apellido paterno:</label></td>
					<td><br><input class="form-control" required="Paterno" type="text" name="Paterno" placeholder="Escriba su apellido paterno" value="<?php echo $row['Paterno']; ?> "/></td>
				</tr>
				<tr>
					<td align="left"><label for="Materno">Apellido materno:</label></td>
					<td><br><input class="form-control" required="Materno" type="text" name="Materno" placeholder="Escriba su apellido materno" value="<?php echo $row['Materno']; ?>"/></td>
				</tr>
				<tr>
					<td align="left"><label for="Email">Email</label></td>
					<td><br><input class="form-control" required="Email" type="Email" name="Email" placeholder="persona@ejemplo.cl" name="Email" value="<?php echo $row['Email']; ?>" /></td>
				</tr>
				<tr>
					<td align="left"><label for="Rut">Rut:</label></td>
					<td><br><input class="form-control" required="Rut" type="text" name="Rut" placeholder="XX.XXX.XXX-X" value="<?php echo $row['Rut']; ?>"/></td>
				</tr>
				<tr>
					<td align="left"><label for="Telefono">Telefono:</label></td>
					<td><br><input class="form-control" required="Telefono" type="tel" name="Telefono" placeholder="+ XX X XXXX XXXX" minlength="9" maxlength="12" value="<?php echo $row['Telefono'];?> "/></td>
				</tr>
				
				
			</table>
				<br/><br/>
		    	<div align="center">
		    		<button class="botoncon" type="submit">Actualizar</button>
		    	</div></form>
</div>
<div class="footer">
  <footer><p>&copy; Verde vertigo, Copiapó 2018</p></footer>
</div>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>
