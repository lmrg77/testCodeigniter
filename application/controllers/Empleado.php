<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Empleado extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('getmenu'));
        $this->load->model('Employees');
    }

    public function index(){
        $data['menu'] = main_menu();
        $this->load->view('empleado', $data);
    }

    public function create(){
        $fecha_ingreso = $this->input->post('fecha_ingreso');
        $nombre = $this->input->post('nombre');
        $salario = $this->input->post('salario');
        $datos = array(
            'fecha_ingreso' => $fecha_ingreso,
            'nombre' => $nombre,
            'salario' => $salario,
        );
        $data['menu'] = main_menu();
        if(!$this->Employees->create($datos)){
            $data['msg'] = "Error al insertar el empleado";
            $this->load->view('empleado', $data);
        };
        $data['msg'] = "Empleado Registrado";
        $this->load->view('empleado', $data);
    }

    public function show(){
        $data['menu'] = main_menu();
        $query = $this->Employees->show();
        $data['result'] = $query->result();
        $data['msg'] = "Empleados Traidos";
        $this->load->view('empleado', $data);
    }
}