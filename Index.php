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

	<?php include('Vistas/Navbar.php');
	include_once("Vistas/conectar_db.php");
	$sql = "SELECT idProductos, Nombre, Url, Cantidad, Precio FROM productos";
	$resultset = mysqli_query($conexion, $sql) or die("Error en la base de datos:". mysqli_error($conexion));
	while( $record = mysqli_fetch_assoc($resultset) ) {
	?>
 
  <div class="col-md-4">
    <div class="thumbnail">
	<div class="card hovercard">
		<div class="cardheader">
			<div class="avatar">
				<img alt="<?php echo $record['Nombre']; ?>" src="data:image/jpg;base64, <?php echo base64_encode($record['Url']);?>" style="width: 100%">
			</div>
		</div>
	<div class="card-body info" align="center">
		<div class="title">
			<a><?php echo $record['Nombre']; ?></a>
		</div>
	
		<div class="desc">Cantidad disponible: <?php if($record['Cantidad']==0){
			echo ('<a style="color: red">Sin stock</a>');
		}else{
			echo ($record['Cantidad']); }?> 
	 </div>
		<div class="desc">Valor: $<?php echo $record['Precio']; ?></div>
	</div>
	</div>
	</div>
	</div>

	<?php } ?>

</div>
<br><br>
<div>
  <footer>&copy; Verde vertigo, Copiapó 2018</footer>
</div>

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>