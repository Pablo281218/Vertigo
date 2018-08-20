<?php
	/**
	* 
	*/
	class conexion{
			function recuperarDatos (){
			$host = "localhost";
			$user = "root";
			$pw = "Pablo1994";
			$db = "vertigo";

			$con = mysql_connect($host, $user, $pw) or die ("No se pudo conectar a la base de datos");
			mysql_select_db($db, $con) or die ("No se encontro la base");

			$query = "SELECT * FROM concursante";
			$resultado = mysql_query($query);

			while ($fila = mysql_fetch_array($resultado)) {
				echo "<tr>";
				echo "<td> $fila[Nombres] </td> <td> $fila[Paterno] </td> <td> $fila[Materno] </td>";
				echo "";
				echo "";
				echo "</tr>";
			}
		}
	}
?>