<?php 
session_start();
if (@!$_SESSION['Usuario']) {
	header ("location: http://localhost/html/Vertigo/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="http://localhost/html/Vertigo/css/Estilo.css">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Verde Vertigo</title>
</head>

<body>
<div class="container" align="center">
<?php include('Navbar.php');?>
<br>
<h4 align="center">Agregar un producto</h4><br>
<div>
	<br>
<table align="center" border="0" width="50%" cellpadding="0">

		<form action="ingresar_proceso_prod.php" method="post" enctype="multipart/form-data">
			
			<tr>
				<td align="left"><label for="Nombre">Nombre:</label></td>
				<td><br><input class="form-control" id="Nombre" type="text" name="Nombre" required /></td>
			</tr>
			<tr>
				<td align="left"><label for="Cantidad">Cantidad:</label></td>
				<td><br><input class="form-control" id="Cantidad" type="text" name="Cantidad" required /></td>
			</tr>
			<tr>
				<td align="left"><label for="Precio">Precio:</label></td>
				<td><br><input class="form-control" id="Precio" type="text" name="Precio" required /></td>
			</tr>
			<tr>
				<td align="left"><label for="URl">Imagen:</label></td>
				<td><br><input class="form-control" id="Url" type="file" name="Url" required/></td>
			</tr>
	

			
	    	</table>

			<br/><br/>
	    	<div >
	    		<button class="botoncon" type="submit">Agregar</button>
	    	</div></form>
				
</div>

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>