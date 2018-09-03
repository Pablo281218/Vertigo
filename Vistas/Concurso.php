<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/html/Vertigo/css/Estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="Funciones.js"></script>
	<meta charset="utf-8">
	<meta http-equiv="Expires" CONTENT="0">
    <meta http-equiv="Cache-Control" CONTENT="no-cache">
    <meta http-equiv="Pragma" CONTENT="no-cache">
	<title>Verde Vertigo</title>
</head>
<body>
	<div class="container">
		<?php include('Navbar.php'); ?>

			<br/><br/>

			<table align="center" border="0" width="50%" cellpadding="0">

					<form id="form" onsubmit="return agregarCliente()">

					<div class="mt-3" id="mensaje">
						
					</div>
					
				<tr>
					<td align="left"><label for="Nombres">Nombres:</label></td>
					<td><br><input class="form-control" id="Nombres"  type="text" name="Nombres" placeholder="Escriba sus nombres" /></td>
				</tr>

				<tr>
					<td align="left"><label for="Paterno">Apellido paterno:</label></td>
					<td><br><input class="form-control" id="Paterno" required="Paterno" type="text" name="Paterno" placeholder="Escriba su apellido paterno" /></td>
				</tr>
				<tr>
					<td align="left"><label for="Materno">Apellido materno:</label></td>
					<td ><br><input  class="form-control" id="Materno" required="Materno" type="text" name="Materno" placeholder="Escriba su apellido materno" /></td>
				</tr>
				<tr>
					<td align="left"><label for="Email">Email</label></td>
					<td><br><input class="form-control" id="Email" required="Email" type="Email" name="Email" placeholder="persona@ejemplo.cl" name="Email" /></td>
				</tr>
				<tr>
					<td align="left"><label for="Rut">Rut:</label></td>
					<td><br><input class="form-control" id="Rut" required="Rut" type="text" name="Rut" placeholder="XX.XXX.XXX-X"/></td>
				</tr>
				
				<tr>
					<td align="left"><label for="Telefono">Telefono:</label></td>
					<td><br><input class="form-control" id="Telefono" required="Telefono" type="tel" name="Telefono" placeholder="+ XX X XXXX XXXX" minlength="9" maxlength="12" /></td>
				</tr>
			</table>
				<br/><div align="center">
				<input required="Terminos" type="checkbox" id="Terminos" name="Terminos" value="Terminos">
    			<label for="Terminos">Acepta recibir informacion promocional</a></label>
				</div><br/>

		    	<div align="center">
		    		<button type="submit" id="boton">Enviar datos</button>
				</div>

				</form>
				</div>
	

<br><br>
	
	<script src="Funciones.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>