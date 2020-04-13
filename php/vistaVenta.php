<div id="grafica">
	<form action="" method="post">
		<input type="hidden" value="venta" name="tabla">
		<input type="submit" name="grafica" value="Graficar">
	</form>
</div>

<form action="" method="post">
	<br>
	<input type="text" name="IDVenta" placeholder="No. de Venta: "><br>
	<br>
	<input type="date" name="fecha" placeholder="Fecha: "> <br>
	<br>
	<input type="text" name="IDCliente" placeholder="ID Cliente: "><br>
	<br>
	<input type="text" name="Total" placeholder="Total: "><br>
	Tipo: <br>
	<select name="tipo_pago">
		<option value="1">___</option>
		<option value="2">___</option>
	</select> <br>
	<input type="submit" name="alta" value="Guardar Venta">
</form>
<?php 
     require_once ("venta.php");
     	$obj = new Venta();
     if (isset($_POST["alta"]))
     {  	# code...
     	$IDVenta = $_POST["IDVenta"];
     	$fecha = $_POST["Fecha"];
     	$IDCliente = $_POST["IDCliente"];
     	$Total = $_POST["Total"];
     	$tipo_pago = $_POST["tipo_pago"];
     	$obj->alta($IDVenta,$fecha,$IDCliente,$Total,$tipo_pago);
     	echo "<h2>Venta registrada</h2>";
     }
 ?>

 <table>
 	<tr>
 		<th>ID Venta</th>
 		<th>Fecha</th>
 		<th>ID Cliente</th>
 		<th>Total</th>
 		<th>Tipo de pago</th>
 	</tr>
 	<?php 
 	  $res = $obj->consulta();
 	  while ($fila = $res->fetch_assoc())
 	   {	# code...
 	   	   echo "<tr>";
 	   	   echo "<td>".$fila["IDVenta"]."</td>";
 	   	   echo "<td>".$fila["fecha"]."</td>";
 	   	   echo "<td>".$fila["IDCliente"]."</td>";
 	   	   echo "<td>".$fila["Total"]."</td>";
 	   	   echo "<td>".$fila["tipo_pago"]."</td>";
 	   	   echo "<tr>";
 	   }
 	 ?>
 </table>