<?php
class Employees extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    public function create($datos){
        if(!$this->db->insert('empleado', $datos)){
            return false;
        }
        return true;
    }

    public function show(){
        $query = $this->db->get('empleado');
        return $query;
    }
}