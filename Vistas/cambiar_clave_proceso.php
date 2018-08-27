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
		
		$pass = $_POST["Pass"];

	$sql= "UPDATE admin SET Pass= '$pass' WHERE idadmin= '1' ";

	//ejecutar
		$ejecutar=mysql_query($sql);
		if(!$ejecutar){
			echo '<script>alert("Ha habido un problema, revisar")</script> ';
		 	header("location: http://localhost/html/Vertigo/index.php");
		}else{ 

	      	echo ('<script>alert("Se ha cambiado su clave")</script>');
			header("location: http://localhost/html/Vertigo/index.php");
		}
?>