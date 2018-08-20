<?php

	//Conectamos a la base de datos
	$conectar=mysql_connect('localhost', 'root', 'Pablo1994');
	//Verificar
	if(!$conectar){
		echo "No se pudo conectar al servidor";
	}else{ 

		$base=mysql_select_db('vertigo');
		if(!base){
			echo "no se encontro la base de datos";
		}
	}
	//Recuperar variables
		$PK = $_REQUEST["Rut"];

	$sql= "DELETE FROM concursante WHERE Rut= '$PK' ";

	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo "Tenemos un problema, revisar porfavor";
		}else{ 
	      	
			header("location: Administrar.php");
		}
?>