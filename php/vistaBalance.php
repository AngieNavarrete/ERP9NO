<form action="" method="post">
	<br>
	<input type="text" name="IDbalance" placeholder="ID Balance: "><br>
	<br>
	<input type="date" name="fechainicio" placeholder="Fecha Inicio:"><br>
	<br>
	<input type="date" name="fechafin" placeholder="Fecha Fin: "><br>
	<br>
	<input type="submit" name="alta" value="Guardar Balance">
</form>
<?php 
     require_once ("balance.php");
     	$obj = new Balance();
     if (isset($_POST["alta"]))
     {  	# code...
     	$IDbalance = $_POST["IDbalance"];
     	$fechainicio = $_POST["fechainicio"];
     	$fechafin = $_POST["fechafin"];
     	$obj->alta($IDbalance,$fechainicio,$fechafin);
     	echo "<h2>Balance Registrado</h2>";
     }
 ?>
 <table>
 	<tr>
 		<th>ID Balance</th>
 		<th>Fecha Inicio</th>
 		<th>Fecha Fin</th>
 	</tr>
 	<?php 
 	  $res = $obj->consulta();
 	  while ($fila = $res->fetch_assoc())
 	   {	# code...
 	   	   echo "<tr>";
 	   	   echo "<td>".$fila["IDbalance"]."</td>";
 	   	   echo "<td>".$fila["fechainicio"]."</td>";
 	   	   echo "<td>".$fila["fechafin"]."</td>";
 	   	   echo "<tr>";
 	   }
 	 ?>
 </table>