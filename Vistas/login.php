<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Estilo.css">
	<link href="signin.css" rel="stylesheet">
	<meta charset="utf-8">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<title>Verde Vertigo</title>
</head>

<body>
<div class="container">
	<?php include('Navbar.php') ?>

	<br>
	<div class="text-center container col-sm-offset-4 col-sm-3">
		<table>
	<form class="form-signin" action="http://localhost/html/Vertigo/Vistas/validar.php" method="post" id="registration_form">
      <img class="mb-4" src="http://localhost/html/Vertigo/img/Logo2.jpg" alt="logo" width="100" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Bienvenido</h1>
      <tr>
	      <td><label for="inputEmail">Usuario</label></td>
	      <td><input type="text" id="form_username" class="form-control" placeholder="Ingrese usuario" required="" autofocus="" name="Usuario"></td>
	      <td><span class="error_form" id="username_error_message"></span></td>
	  </tr>
      	
	  <tr>
	      <td><label for="form_password">Contraseña</label></td>
	      <td><input type="password" id="form_password" class="form-control" placeholder="Ingrese contraseña" required="" name="Pass"></td>
	      <td><span class="error_form" id="password_error_message"></span></td>
  	  </tr>
      	

      <div >
        <br>
      </div>
      
    </form>
	</table>
	<br>
	<button class="btn btn-lg btn-primary btn-block" type="submit">Iniciar sesion</button>
      <p class="mt-5 mb-3 text-muted">©2018</p>

    <tr>
		    
		    <td><span class="error_form" id="inputPassword"></span></td>
    </tr>
	</div>
	<br>
</div>
	
	<script src="Check.js"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	
</body>
</html>