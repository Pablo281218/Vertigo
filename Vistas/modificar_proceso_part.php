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
		$PK = $_REQUEST["Rut"];
		$nombres = $_POST["Nombres"];
		$paterno = $_POST["Paterno"];
		$materno = $_POST["Materno"];
		$email = $_POST["Email"];
		$rut = $_POST["Rut"];
		$telefono = $_POST["Telefono"];

	$sql= "UPDATE concursante SET Nombres= '$nombres', Paterno= '$paterno', Materno= '$materno', Email= '$email', Rut= '$rut', Telefono='$telefono' WHERE Rut= '$PK' ";

	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo '<script>alert("Ha habido un problema, revisar")</script> ';
		 	header("location: Administrar.php");
		}else{ 
	      	
			header("location: Administrar.php");
		}
?>