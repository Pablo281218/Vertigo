<?php 
session_start();
?>
		<nav class="navbar navbar-inverse colornav container-fluid">
				<div class="container-fluid">
					
				    <ul class="nav navbar-nav">
				      <li ><a href="http://localhost/html/Vertigo/index.php">Inicio</a></li>
				      <li ><a href="http://localhost/html/Vertigo/Vistas/Concurso.php">Concurso</a></li>
				      <li ><a href="http://localhost/html/Vertigo/Vistas/Participantes.php">Participantes</a></li>
		      <?php
		      
			      if ($_SESSION['Usuario']=="pablo") {
			        echo ('<li ><a href="http://localhost/html/Vertigo/Vistas/Administrar.php">Administrar</a>
			      	</li>');		
			        } ?>
					</ul>

				   <?php 	
						 if ($_SESSION['Usuario']=="pablo"){ 
					echo ('<div class="container input-group-btn input-group navbar-form navbar-right dropdown"><button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" style="color: #000 ; background: #FFF"> Bienvenido, Pablo
						  <span class="caret"></span></button>
						  <ul class="dropdown-menu">
						  	<li><a href="http://localhost/html/Vertigo/Vistas/cambiar_clave.php">Cambiar clave</a></li>
						    <li><a href="http://localhost/html/Vertigo/Vistas/cerrar_sesion.php">Cerrar sesion</a></li>
						  </ul></div>');

						  	}else{
						
			  	 	echo ('<div class="container input-group-btn input-group navbar-form navbar-right"><a href="http://localhost/html/Vertigo/Vistas/login.php"><button type="button" class="btn" style="color: #000 ; background: #FFF">Iniciar sesion</button></a></div>');
							}	?>
				  
			  	</div>
		</nav>