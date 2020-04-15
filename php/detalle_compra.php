<?php 
    require_once("conexión.php");
    class Usuario extends Conexion
    {
    	public function alta($IDdetallecompra,$IDmateriaprima,$IDcompra,$cantidad)
    	{
    		$this->sentencia = "INSERT INTO detalle_compra VALUES (null,'$IDdetallecompra','$IDmateriaprima','$IDcompra','$cantidad')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM detalle_compra WHERE IDdetallecompra=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM detalle_compra";
    		return $this->obtenerSentencia();
    	}

    }


 ?>