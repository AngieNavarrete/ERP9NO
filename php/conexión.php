<?php

    class Conexion
    {
      private $usuario;
      private $base="erp";
      private $password="";
      private $host="localhost";
      protected $sentencia = "";
      public $conexion;

      private function abrirConexion()
      {
          $this->conexion = new mysqli($this->host,$this->usuario,$this->password,$this->base);
      }
      private function cerrarConexion()
      {
         $this->conexion->close();
      }
      
      public function ejecutarSentencia()
      {
        $this->abrirConexion();
        $this->conexion->query($this->sentencia);
        $this->cerrarConexion();
      }//alta,bajas,modificaciones

      public function obtenerSentencia()
      {
        $this->abrirConexion();
        $resultado = $this->conexion->query($this->sentencia);
        return $resultado;
      }
      
    }
?>