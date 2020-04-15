<?php 
    require_once("conexión.php");
    class Balance extends Conexion
    {
        public function grafica($nombre,$campo)
        {
            $this->sentencia = "SELECT $campo FROM $nombre";
            $res = $this->obtenerSentencia();
            $nombres = "";
            while ($fila = $res->fetch_assoc()) 
            {# code...
                $nombre = $nombres."'".$fila[$campo]."',";
            }
            return $nombres;
        }
    	public function alta($IDbalance,$fechainicio,$fechafin,$total)
    	{
    		$this->sentencia = "INSERT INTO balance VALUES (null,'$IDbalance','$fechainicio','$fechafin','$total')";
    		$this->ejecutarSentencia();
    	}

    	public function baja($id)
    	{
    		$this->sentencia = "DELETE FROM balance WHERE IDbalance=$id";
    		$this->ejecutarSentencia();
    	}

    	public function consulta()
    	{
    		$this->sentencia = "SELECT * FROM balance";
    		return $this->obtenerSentencia();
    	}
        public function modificar($IDbalance,$fechainicio,$fechafin,$total)
        {
            $this->sentencia = "UPDATE FROM balance SET IDbalance='$IDbalance',fecha='$fechainicio',fechafin='$fechafin',total='$total' WHERE IDbalance='$id'";
            $this->ejecutarSentencia();
        }

    }


 ?>