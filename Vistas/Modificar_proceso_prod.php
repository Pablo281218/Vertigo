<?php

	//Conectamos a la base de datos
	$conectar=mysql_connect('localhost', 'root', 'Pablo1994');
	//Verificar
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}else{ 

		$base=mysql_select_db('vertigo');
		if(!$base){
			echo "no se encontro la base de datos";
		}
	}
	//Recuperar variables
		$idProductos = $_REQUEST["idProductos"];
		$nombre = $_POST["Nombre"];
		$precio = $_POST["Precio"];
		$cantidad = $_POST["Cantidad"];

	$sql= "UPDATE productos SET Nombre= '$nombre', Precio= '$precio', Cantidad= '$cantidad' WHERE idProductos= '$idProductos' ";

	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo '<script>alert("Ha habido un problema, revisar")</script> ';
		 	header("location: Administrar.php");
		}else{ 
	      	
			header("location: Administrar.php");
		}
?>