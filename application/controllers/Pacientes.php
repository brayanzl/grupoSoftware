<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pacientes extends CI_Controller
{

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     *	- or -
     * 		http://example.com/index.php/welcome/index
     *	- or -
     * Since this controller is set as the default controller in
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see https://codeigniter.com/user_guide/general/urls.html
     */
    function __construct()
    {

        parent::__construct();
        $this->load->model('Paciente_model');
        $this->load->model('Usuario_model');
    }
    public function index()
    {
        $data['paciente'] = $this->Paciente_model->lista();

        $this->load->view('layouts/header');
        $this->load->view('pacientes/index', $data);
        $this->load->view('layouts/footer');
    }
    public function insert()
    {

        $idUsuario = $this->session->userdata('idUsuarios'); //captura el id usuario
        //echo $idUsuario;

        $data = $this->Usuario_model->obtenerUsuario($idUsuario);
        //print_r($data);
        $this->load->view('layouts/header');
        $this->load->view('pacientes/insert', $data);
        $this->load->view('layouts/footer');
    }
    public function guardar()
    {
        $data = $this->datos();
        $this->Paciente_model->agregarPaciente($data);
        redirect(base_url() . 'pacientes');
    }
    public function datos()
    {


        //$data['idUsuario'] = $this->input->post('idUsuario');//usuario
        date_default_timezone_set("America/La_Paz");
        $data['nombres'] = $_POST['nombres'];
        $data['apellidoPaterno'] = $_POST['apellidoPaterno'];
        $data['apellidoMaterno'] = $_POST['apellidoMaterno'];
        $data['carnet'] = $_POST['carnet'];
        $data['sexo'] = $_POST['sexo'];
        $data['fechaNacimiento'] = $_POST['fechaNacimiento'];
        $data['telefono'] = $_POST['telefono'];
        $data['idUsuarios'] = $_POST['idUsuarios'];
        $data['fechaActualizacion'] = date("Y-m-d H:i:s");

        return $data;
    }
    public function eliminar($idPaciente)
	{

		$data = array(
			'estado' => 0

		);
		$this->Paciente_model->eliminarPaciente($idPaciente, $data);
		redirect(base_url() . 'Pacientes');
	}

    public function editar($idPaciente)
	{
        $idUsuario = $this->session->userdata('idUsuarios'); 

        $dat = $this->Usuario_model->obtenerUsuario($idUsuario);

		$data['paciente'] = $this->Paciente_model->recuperarPaciente($idPaciente);
        //print_r($data);

		$this->load->view('layouts/header');
		$this->load->view('pacientes/update', $data, $dat);
		$this->load->view('layouts/footer');
        
	}
    public function update()
	{
        
		$idPaciente = $this->input->post('idPacientes');
        //echo $idPaciente;
        
		$data = $this->datos();
		$this->Paciente_model->modificarPaciente($idPaciente, $data);
		redirect(base_url() . 'Pacientes');
        
	}
}
