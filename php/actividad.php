<?php 
    require_once("conexion.php");
    class Usuario extends Conexion
    {
    	public function alta($IDactividad,$registro,$IDusuario,$movimiento_act,$movimiento_tabla)
    	{
    		$this->sentencia = "INSERT INTO actividad VALUES (null,'$IDactividad','$registro','$IDusuario','$movimiento_act','$movimiento_tabla')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM actividad WHERE IDactividad=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM actividad";
    		return $this->obtenerSentencia();
    	}

        public function modificar($IDactividad,$registro,$IDusuario,$movimiento_act,$movimiento_tabla,$id)
        {
            $this->sentencia = "UPDATE FROM actividad SET IDactividad='$IDactividad',registro='$registro',IDusuario='$IDusuario', movimiento_act='$movimiento_act',movimiento_tabla='$movimiento_tabla' WHERE IDactividad='$id'";
            $this->ejecutarSentencia();
        }
    }


 ?>