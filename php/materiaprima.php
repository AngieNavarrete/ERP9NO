<?php 
    require_once("conexion.php");
    class Usuario extends Conexion
    {
    	public function alta($IDmateriaprima,$nombre,$tipo,$descripcion,$precio,$stock,$existencias)
    	{
    		$this->sentencia = "INSERT INTO materiaprima VALUES (null,'$IDmateriaprima','$nombre','$tipo','$descripcion','$precio','$stock','$existencias')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM materiaprima WHERE IDmateriaprima=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM materiaprima";
    		return $this->obtenerSentencia();
    	}

    }


 ?>