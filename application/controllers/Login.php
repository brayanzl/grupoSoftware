<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
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
		$this->load->model('Login_model');
	}

	public function index()
	{
		$this->load->view('login');
	}


	public function ingresar()
	{

		$login = $_POST['login'];
		$password = md5($_POST['password']);

		$consulta = $this->Login_model->ingresar($login, $password);

		if ($consulta->num_rows() > 0) {
			foreach ($consulta->result() as $row) {
				$this->session->set_userdata('idUsuarios', $row->idUsuarios);
				$this->session->set_userdata('login', $row->login);
				$this->session->set_userdata('rol', $row->rol);

				redirect('Welcome', 'refresh');
			}
		} else {
			$data['mensaje'] = "Usuario y/o contraseña incorrectos";
			$this->load->view('login',$data);
		}
	}

	public function cerrar_session()
	{

		$usuario_data = array('s_logeado' => FALSE);
		$this->session->set_userdate($usuario_data);
		$this->load->view('login');
	}
}
