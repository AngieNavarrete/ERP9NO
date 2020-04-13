<?php 
    require_once("conexion.php");
    class Usuario extends Conexion
    {
    	public function alta($IDasistencia,$Fecha,$IDempleado,$Hora)
    	{
    		$this->sentencia = "INSERT INTO asistencia VALUES (null,'$IDasistencia','$Fecha','$IDempleado','$Hora')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM asistencia WHERE IDasistencia=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM asistencia";
    		return $this->obtenerSentencia();
    	}

        public function modificar($IDasistencia,$Fecha,$IDempleado,$Hora,$id)
        {
            $this->sentencia = "UPDATE FROM asistencia SET IDasistencia='$IDasistencia',Fecha='$Fecha',IDempleado='$IDempleado',Hora='$Hora' WHERE IDasistencia='$id'";
            $this->ejecutarSentencia();
        }


    }


 ?>