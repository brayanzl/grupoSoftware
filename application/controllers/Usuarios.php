<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Usuarios extends CI_Controller
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
		$this->load->model('Usuario_model');
	}
	public function index()
	{
		$data['usuario'] = $this->Usuario_model->lista();

		$this->load->view('layouts/header');
		$this->load->view('usuarios/index', $data);
		$this->load->view('layouts/footer');
	}
	public function insertar()
	{
		$this->load->view('layouts/header');
		$this->load->view('usuarios/insert');
		$this->load->view('layouts/footer');
	}



	public function guardar()
	{
		$login = $this->input->post('login'); //capturar el nombre del usuario

		$params = $this->datos();
		$verificarLogin = $this->Usuario_model->verificar_login($login);

		if ($verificarLogin == 0) {
			$this->Usuario_model->agregarUsuario($params);
			redirect('usuarios', 'refresh');
		} else {

			$this->load->view('layouts/header');
			$this->load->view('usuarios/insert');
			$this->load->view('layouts/footer');
		}
	}


	public function datos()
	{
		$params = array(
			'login' => trim($this->input->post('login')),
			'password' => md5($this->input->post('password')),
			'rol' => trim($this->input->post('rol')),
			'nombres' => trim($this->input->post('nombres')),
			'apellidoPaterno' => trim($this->input->post('apellidoPaterno')),
			'apellidoMaterno' => trim($this->input->post('apellidoMaterno')),
			'telefono' => trim($this->input->post('telefono')),
			'fechaNacimiento' => trim($this->input->post('fechaNacimiento')),
			'sexo' => trim($this->input->post('sexo')),
			'carnet' => trim($this->input->post('carnet')),

		);
		return $params;
	}
	public function editar($idUsuario)
	{
		$data['usuario'] = $this->Usuario_model->obtenerUsuario($idUsuario);
		$this->load->view('layouts/header');
		$this->load->view('usuarios/update', $data);
		$this->load->view('layouts/footer');
	}
	public function modificar()
	{
		$idUsuario = $this->input->post('idUsuarios');
		//print_r($idUsuario);
		$params = $this->psw();
		$this->Usuario_model->modificar($idUsuario, $params);
		$this->session->set_flashdata("modificado", "se modifico");
		redirect('usuarios', 'refresh');
	}
	public function psw()
	{
		$params = array(
			'password' => md5($this->input->post('password'))
		);
		return $params;
	}
}
