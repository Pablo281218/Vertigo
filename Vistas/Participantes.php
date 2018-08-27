<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/Estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<meta charset="utf-8">
	<title>Verde Vertigo</title>
</head>
<body>

	<div class="container">
    <?php include('Navbar.php'); ?>

      <div class="container-fluid">
        <h2>Participantes</h2>
          <p>Ganador/a del concurso será contactado por mail o telefono.</p>  
            <input class="form-control" id="myInput" type="text" placeholder="Buscar"><br>
              <table class="table table-bordered table-striped">
                  <thead>
                      <tr>
                        <th>Nombres</th>
                        <th>Apellido paterno</th>
                        <th>Apellido materno</th>
                      </tr>
                  </thead>
                <tbody id="myTable">
                 
            			<?php

            			include('conexion.php');
            			$con = new conexion();
            			$con -> recuperarDatos();

            			?>
            		
                </tbody>
              </table>
      </div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>

  </div>
  <br><br>

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>