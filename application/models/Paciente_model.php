<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Paciente_model extends CI_Model
{
    function lista()
    {
        $this->db->where("estado", 1);
        $this->db->order_by('idPacientes', 'desc');
        return $this->db->get('pacientes')->result_array();
    }
    public function agregarPaciente($data)
    {
        $this->db->insert('pacientes', $data);
    }
    function eliminarPaciente($idPaciente, $data)
	{
		$this->db->where('idPacientes', $idPaciente);
		return $this->db->update('pacientes', $data);
	}
    public function recuperarPaciente($idPaciente)
	{
		return $this->db->get_where('pacientes', array('idPacientes' => $idPaciente))->row_array();
	}
    public function modificarPaciente($idPaciente, $data)
	{
		$this->db->where('idPacientes', $idPaciente);
		$this->db->update('pacientes', $data);
	}
}
