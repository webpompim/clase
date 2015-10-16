<?php

class ModelEmpleado{
    private $db;
    private $personas;
    
    public function __construct() {
        $this->db = Conectar::conexion();
        $this->personas=array();
    }
    public function get_personas(){
        $consulta = $this->db->query("select * from empleado");
        while ($filas = $consulta->fetch_array()){
            $this->personas[] = $filas;
            
            
        }
        return $this->personas;
    }
    
    
}