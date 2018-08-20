<?php 

	include("conectar_db.php");

	$nombre = $_POST['Nombre'];
	$cantidad = $_POST['Cantidad'];
	$precio = $_POST['Precio'];
	$Url = addslashes(file_get_contents($_FILES['Url']['tmp_name']));
	$query = "INSERT INTO productos(Nombre, Precio, Cantidad, Url) VALUES('$nombre', '$precio', '$cantidad', '$Url')";
	$resultado = $conexion->query($query);

	if($resultado){
		echo "<script>location.href='http://localhost/html/Vertigo/Vistas/Administrar.php'</script>";
		
	}else{
		echo '<script>alert("Hubo un problema")</script> ';
		echo "<script>location.href='http://localhost/html/Vertigo/Vistas/Administrar.php'</script>";
	}
?>