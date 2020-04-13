<?php 
    require_once("conexion.php");
    class Usuario extends Conexion
    {
    	public function alta($IDdevoluciones,$fecha,$cantidad,$descripcion,$IDproducto)
    	{
    		$this->sentencia = "INSERT INTO devoluciones VALUES (null,'$IDdevoluciones','$fecha','$cantidad','$descripcion','$IDproducto')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM devoluciones WHERE IDdevoluciones=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM devoluciones";
    		return $this->obtenerSentencia();
    	}

    }


 ?>