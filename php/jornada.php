<?php 
    require_once("conexion.php");
    class Usuario extends Conexion
    {
    	public function alta($IDjornada,$hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extras,$bonos,$IDempleado)
    	{
    		$this->sentencia = "INSERT INTO jornada VALUES (null,'$IDjornada','$hrs_trabajadas','$dias_trabajados','$pago_hora','$horas_extras','$bonos','$IDempleado')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM jornada WHERE IDjornada=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM jornada";
    		return $this->obtenerSentencia();
    	}

    }


 ?>