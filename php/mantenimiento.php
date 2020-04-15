<?php 
    require_once("conexión.php");
    class Usuario extends Conexion
    {
    	public function alta($IDmantenimiento,$fecha_man,$area,$IDmob,$costo_man,$IDempleado)
    	{
    		$this->sentencia = "INSERT INTO mantenimiento VALUES (null,'$IDmantenimiento','$fecha_man','$area','$IDmob','$costo_man',$IDempleado')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM mantenimiento WHERE IDmantenimiento=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM mantenimiento";
    		return $this->obtenerSentencia();
    	}

    }


 ?>