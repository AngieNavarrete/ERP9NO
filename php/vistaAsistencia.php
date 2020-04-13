<form action="" method="post">
	<br>
	<input type="text" name="IDasistencia" placeholder="ID Asistencia: "><br>
	<br>
	<input type="day" name="Fecha" placeholder="Fecha: "><br>
	<br>
	<input type="text" name="IDempleado" placeholder="ID Empleado: "><br>
	<br>
	<input type="time" name="Hora" placeholder="Hora: "><br>
	<br>
	<input type="submit" name="alta" value="Guardar Asistencia">
</form>

<?php 
     require_once ("asistencia.php");
     	$obj = new Asistencia();
     if (isset($_POST["alta"]))
     {  	# code...
     	$IDasistencia = $_POST["IDasistencia"];
     	$Fecha = $_POST["Fecha"];
     	$IDempleado = $_POST["IDempleado"];
     	$Hora = $_POST["Hora"];
     	$obj->alta($IDasistencia,$Fecha,$IDempleado,$Hora);
     	echo "<h2>Asistencia registrada</h2>";
     }
 ?>
 
 <table>
 	<tr>
 		<th>ID asistencia</th>
 		<th>Fecha</th>
 		<th>ID empleado</th>
 		<th>Hora</th>
 	</tr>
 	<?php 
 	  $res = $obj->consulta();
 	  while ($fila = $res->fetch_assoc())
 	   {	# code...
 	   	   echo "<tr>";
 	   	   echo "<td>".$fila["IDasistencia"]."</td>";
 	   	   echo "<td>".$fila["Fecha"]."</td>";
 	   	   echo "<td>".$fila["IDempleado"]."</td>";
 	   	   echo "<td>".$fila["Hora"]."</td>";
 	   	   echo "<tr>";
 	   }
 	 ?>
 </table>