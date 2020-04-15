<?php 
    require_once("conexión.php");
    class Usuario extends Conexion
    {
    	public function alta($IDcliente,$nombre,$direccion,$telefono,$correo,$apematerno,$apepaterno,$sexo,$fenacimiento)
    	{
    		$this->sentencia = "INSERT INTO cliente VALUES (null,'$IDcliente','$nombre','$direccion','$telefono','$correo','$apematerno','$apepaterno','$sexo','$fenacimiento')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM cliente WHERE IDcliente=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM cliente";
    		return $this->obtenerSentencia();
    	}

    }


 ?>