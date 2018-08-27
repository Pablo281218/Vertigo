<?php 
session_start();
if (@!$_SESSION['Usuario']) {
	header ("location: http://localhost/html/Vertigo/index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Estilo.css">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

	<title>Verde Vertigo</title>
</head>
<body>
	<div class="container">

		<?php include('Navbar.php') ?>
			  	
		</nav>

<!-- CONTENIDO PAGINA-->

<br/><br/>

			


	<br>
	<div class="text-center container col-sm-offset-4 col-sm-3">

		<table align="center" border="0" width="50%" cellpadding="0">
			<form class="form-signin" action="http://localhost/html/Vertigo/Vistas/cambiar_clave_proceso.php" method="post">
		      <img class="mb-4" src="http://localhost/html/Vertigo/img/Logo2.jpg" alt="logo" width="100" height="72">
		      <h1 class="h3 mb-3 font-weight-normal"></h1>

		     
		      <label for="Pass" >Pass nueva </label>
		      	<input type="password" id="Pass" class="form-control" placeholder="Ingrese contraseña" required name="Pass">
		      <div >
		        <br>
		      </div>
		     <button class="botoncon" type="submit">Actualizar</button>
		    </form>
			
			<br>
	</div>
		    </form>
		</table>
		
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>