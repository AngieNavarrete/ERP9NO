<?php 
    require_once("conexion.php");
    class Usuario extends Conexion
    {
    	public function alta($IDcompra,$fecha,$total,$tipo_pago,$IDcliente)
    	{
    		$this->sentencia = "INSERT INTO compra VALUES (null,'$IDcompra','$fecha','$total','$tipo_pago','$IDcliente')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM compra WHERE IDcompra=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM compra";
    		return $this->obtenerSentencia();
    	}

    }


 ?>