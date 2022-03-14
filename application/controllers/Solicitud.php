<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Solicitud extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper(array('getmenu'));
        $this->load->model('Solicitude');
    }

    public function index(){
        $data['menu'] = main_menu();
        $query = $this->Solicitude->showAll();
        $data['empleados'] = $query->result();
        $this->load->view('solicitud', $data);
    }

    public function create(){
        $codigo = $this->input->post('codigo');
        $descripcion = $this->input->post('descripcion');
        $resumen = $this->input->post('resumen');
        $id_empleado = $this->input->post('id_empleado');
        $datos = array(
            'codigo' => $codigo,
            'descripcion' => $descripcion,
            'resumen' => $resumen,
            'id_empleado' => $id_empleado,
        );
        $data['menu'] = main_menu();
        if(!$this->Solicitude->create($datos)){
            $data['msg'] = "Error al insertar la solicitud";
            $this->load->view('solicitud', $data);
        };
        $data['msg'] = "Solicitud Registrada";
        $this->load->view('solicitud', $data);
    }

    public function show(){
        $data['menu'] = main_menu();
        $query = $this->Solicitude->show();
        $data['result'] = $query->result();
        $data['msg'] = "Solicitudes Traidas";
        $this->load->view('solicitud', $data);
    }
}