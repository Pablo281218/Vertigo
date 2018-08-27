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
	<?php require("Navbar.php"); ?>

<!-- CONTENIDO PAGINA-->


<div class="container-fluid">
  <h2>Productos disponibles</h2>
   
  <table class="table table-bordered table-striped">

    <thead>
      <tr>
      	<th>Id</th>
        <th>Nombre</th>
        <th>Precio</th>
        <th>Cantidad</th>
        <th colspan="2">Admin</th>
      </tr>
    </thead>
    <tbody id="myTable">
      			<?php
					$conexion= new mysqli('localhost', 'root', 'Pablo1994', 'vertigo');
					
					$query="SELECT * FROM productos";
					$resultado= $conexion->query($query);
					while ($row=$resultado->fetch_assoc()){
				?>
					<tr align="right">
						<td><?php echo $row['idProductos'];?></td>
						<td><?php echo $row['Nombre'];?></td>
						<td><?php echo $row['Precio'];?></td>
						<td><?php echo $row['Cantidad'];?></td>
						<td align="center"><a href="Modificar_prod.php?idProductos=<?php echo $row['idProductos'];?>"><button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
						<td align="center"><a href="Eliminar_prod.php?idProductos=<?php echo $row['idProductos'];?>"><button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-remove"></span></button></a></td>
					</tr>
				<?php
					}
				?>
    </tbody>
  </table>
   <div align="right"><a href="agregar_prod.php"><button type="button" class="btn btn-default btn-default container-fluid right">Agregar nuevo <span class="glyphicon glyphicon-plus"></span></button></a></div>
  <br>
  
</div>

<div class="container-fluid">
  <h2>Participantes registrados</h2>
    
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Nombres</th>
        <th>Paterno</th>
        <th>Materno</th>
        <th>Email</th>
        <th>Rut</th>
        <th>Telefono</th>
        <th colspan="2">Admin</th> 
      </tr>
    </thead>
    <tbody id="myTable">

      			<?php

					$conexion= new mysqli('localhost', 'root', 'Pablo1994', 'vertigo');
					
					$query="SELECT * FROM concursante";
					$resultado= $conexion->query($query);
					while ($row=$resultado->fetch_assoc()){

				?>

					<tr align="right">
						<td><?php echo $row['Nombres'];?></td>
						<td><?php echo $row['Paterno'];?></td>
						<td><?php echo $row['Materno'];?></td>
						<td><?php echo $row['Email'];?></td>
						<td><?php echo $row['Rut'];?></td>
						<td><?php echo $row['Telefono'];?></td>
						<td align="center"><a href="Modificar_part.php?Rut=<?php echo $row['Rut']; ?>"><button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
						<td align="center"><a href="Eliminar_part.php?Rut=<?php echo $row['Rut']; ?>"><button type="button" class="btn btn-default btn-default"><span class="glyphicon glyphicon-remove"></span></button></a></td>
					</tr>

				<?php
					}
				?>
    </tbody>
  </table>
  <br><br>
  
</div>


</div>

	<script src="../js/jquery.js"></script>
	<script src="../js/bootstrap.min.js"></script>
</body>
</html>