<?php
class Solicitude extends CI_Model{
    function __construct(){
        $this->load->database();
    }

    public function create($datos){
        if(!$this->db->insert('solicitud', $datos)){
            return false;
        }
        return true;
    }

    public function show(){
        $this->db->select('soli.id, soli.codigo, soli.descripcion, soli.resumen, emp.nombre');
        $this->db->from('empleado as emp, solicitud as soli');
        $this->db->where('soli.id_empleado = emp.id');
        $query = $data = $this->db->get();
        return $query;
    }

    public function showAll(){
        $query = $this->db->get('empleado');
        return $query;
    }
}