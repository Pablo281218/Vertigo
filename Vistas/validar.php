<?php
session_start();

	require("conectar_db.php");

	$Usuario=$_POST['Usuario'];
	$Pass=$_POST['Pass'];

	$sql=mysqli_query($conexion,"SELECT * FROM admin WHERE Usuario='$Usuario'");
	if($f=mysqli_fetch_assoc($sql)){
		if($Pass==$f['Pass']){
			$_SESSION['Usuario']=$f['Usuario'];
			header("Location: http://localhost/html/Vertigo/Vistas/Administrar.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
			echo "<script>location.href='http://localhost/html/Vertigo/vistas/login.php'</script>";
		}
	}else{
		
		 echo '<script>alert("No existe este administrador")</script> ';
		 echo "<script>location.href='http://localhost/html/Vertigo/Vistas/login.php'</script>";
	}

?>