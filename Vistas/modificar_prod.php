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

	<?php include('Navbar.php');
	include_once("conectar_db.php");
	$sql = "SELECT idProductos, Nombre, Url, Cantidad, Precio FROM productos";
	$resultset = mysqli_query($conexion, $sql) or die("Error en la base de datos:". mysqli_error($conexion));
	?>

				<table align="center" border="0" width="50%" cellpadding="0">
						
						<?php
							$idProductos=$_REQUEST['idProductos'];
							
							$conexion= new mysqli('localhost', 'root', 'Pablo1994', 'vertigo');
							
							$query="SELECT * FROM productos WHERE idProductos='$idProductos' ";
							$resultado= $conexion->query($query);
							$row=$resultado->fetch_assoc();
						?> 
<br>
 <h4 align="center">Modificar datos de productos</h4><br>
 <div>
  <div class="col-md-4">
	    <div class="thumbnail">
			<div class="card hovercard">
				<div class="cardheader">
					<div class="avatar">
						<img alt="<?php echo $row['Nombre']; ?>" src="data:image/jpg;base64, <?php echo base64_encode($row['Url']);?>" style="width: 100%">
					</div>
				</div>
			</div>
		</div>
	</div>
			<br><br>
			<table align="center" border="0" width="50%" cellpadding="0">
			<form action="modificar_proceso_prod.php?idProductos=<?php echo $row['idProductos']; ?>" method="post">
				
				<tr>
					<td align="left"><label for="idProductos">Id:</label></td>
					<td><br><input class="form-control" required type="text" name="idProductos" value="<?php echo $row['idProductos']; ?>" disabled /></td>
				</tr>
		
				<tr>
					<td align="left"><label for="Nombre">Nombre:</label></td>
					<td><br><input class="form-control" id="Nombre" type="text" name="Nombre" value="<?php echo $row['Nombre']; ?>" required /></td>
				</tr>
				<tr>
					<td align="left"><label for="Precio">Precio:</label></td>
					<td><br><input class="form-control" id="Precio" type="text" name="Precio" value="<?php echo $row['Precio']; ?>" required /></td>
				</tr>
				<tr>
					<td align="left"><label for="Cantidad">Cantidad:</label></td>
					<td><br><input class="form-control" id="Cantidad" type="text" name="Cantidad" value="<?php echo $row['Cantidad']; ?>" required /></td>
				</tr>

				
		    	</table>

				<br/><br/>
		    	<div >
		    		<button class="botoncon" type="submit">Actualizar</button>
		    	</div></form>
				

	
</div>

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>