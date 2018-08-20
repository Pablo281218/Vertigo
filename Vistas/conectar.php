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

		$nombres = $_POST["Nombres"];
		$paterno = $_POST["Paterno"];
		$materno = $_POST["Materno"];
		$email = $_POST["Email"];
		$rut = $_POST["Rut"];
		$telefono = $_POST["Telefono"];

	$sql= "INSERT INTO concursante VALUES (	'$nombres',
											'$paterno',
											'$materno',
											'$email',
											'$rut',
											'$telefono'
											)"; 
	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo '<script>alert("Usuario ya existente")</script> ';
		 	echo "<script>location.href='http://localhost/html/Vertigo/Vistas/concurso.php'</script>";
		}else{ 		

			header("location: participantes.php");
		}
?>