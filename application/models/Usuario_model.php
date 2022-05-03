<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usuario_model extends CI_Model
{

	function lista()
	{
		$this->db->where("estado",1);
		$this->db->order_by('idUsuarios', 'desc');
		return $this->db->get('usuarios')->result_array();
	}

	/*
     * verificar usuario
     */
	function verificar_login($user) //VERIFICA SI YA EXISTE EL MISMO USUARIO 3
	{
		$this->db->from("usuarios");
		$this->db->where("login", $user);
		$r = $this->db->get();

		return $r->num_rows();
		if ($r->num_rows() == 1) {
			return 1;
		} else {
			return 0;
		}
	}
	function agregarUsuario($params)
	{
		$this->db->insert('usuarios', $params);
	}

	function obtenerUsuario($idUsuario)
	{
		return $this->db->get_where('usuarios', array('idUsuarios' => $idUsuario))->row_array();
	}

	function modificar($idUsuario, $params)
	{
		$this->db->where('idUsuarios', $idUsuario);
		return $this->db->update('usuarios', $params);
	}
	function eliminarUsuario($idUsuario, $data)
	{
		$this->db->where('idUsuarios', $idUsuario);
		return $this->db->update('usuarios', $data);
	}
}
