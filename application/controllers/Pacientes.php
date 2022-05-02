<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pacientes extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Paciente_model');
    }
    public function index()
    {
        $data['paciente'] = $this->Paciente_model->lista();
        $this->load->view('layouts/header');
        $this->load->view('Paciente/indexPaciente', $data);
        $this->load->view('layouts/footer');
    }
    public function insertar()
    {
        $this->load->view('layouts/header');
        $this->load->view('Paciente/insertPaciente');
        $this->load->view('layouts/footer');
    }
    public function guardar()
    {
        $params = $this->datos();
        $this->Paciente_model->agregarPaciente($params);
        redirect('pacientes', 'refresh');
    }
    public function datos()
    {
        $params = array(
            'nombres' => trim($this->input->post('nombres')),
            'apellidoPaterno' => trim($this->input->post('apellidoPaterno')),
            'apellidoMaterno' => trim($this->input->post('apellidoMaterno')),
            'telefono' => trim($this->input->post('telefono')),
            'carnet' => trim($this->input->post('carnet')),
            'fechaNacimiento' => trim($this->input->post('fechaNacimiento')),
            'sexo' => trim($this->input->post('sexo')),
        );
        return $params;
    }
}
