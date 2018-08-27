<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/Estilo.css">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Verde Vertigo</title>
</head>
<body>

<div class="container">

	<?php include('Vistas/Navbar.php'); ?>
	<div class="container-fluid">
	<table id="tablaindex" class="table table-bordered" style="width: 100%">
		<tr>
			
			<td style="width: 13%" align="center" ><strong> Imagen del producto </strong></td>
			<td style="width: 13%" align="center" ><strong> Nombre del producto</strong></td>
			<td style="width: 13%" align="center" ><strong> Cantidad disponible </strong></td>
			<td style="width: 13%" align="center" ><strong> Precio (CLP) </strong></td>

		</tr>
	<?php
	include_once("Vistas/conectar_db.php");
	$sql = "SELECT idProductos, Nombre, Url, Cantidad, Precio FROM productos";
	$resultset = mysqli_query($conexion, $sql) or die("Error en la base de datos:". mysqli_error($conexion));
	while( $record = mysqli_fetch_assoc($resultset) ) {
	?>
	  		
	            	<tr>
						<td style="width: 15%" align="center" ><img alt="<?php echo $record['Nombre']; ?>" src="data:image/jpg;base64, <?php echo base64_encode($record['Url']);?>" style= "width: 100%"></td>
						<td style="width: 13%" align="center" ><?php echo $record['Nombre']; ?></td>
						<td style="width: 13%" align="center" ><?php if($record['Cantidad']==0){
							echo ('<a style="color: red">Sin stock</a>');
							}else{
							echo ($record['Cantidad']); }?> 
		 				</td>
						<td style="width: 13%" align="center" >$<?php echo $record['Precio']; ?></td>
					</tr>
	<?php } ?>
	</table>
	</div>
</div>
			
			


</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>