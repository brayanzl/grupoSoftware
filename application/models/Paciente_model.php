<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Paciente_model extends CI_Model
{

    function lista()
    {
        $this->db->order_by('idPacientes', 'desc');
        return $this->db->get('pacientes')->result_array();
    }
    /*
     * verificar paciente
     */
    function verificar_login($user) //VERIFICA SI YA EXISTE EL MISMO USUARIO 3
    {
        $this->db->from("pacientes");
        $this->db->where("nombres", $user);
        $r = $this->db->get();
        return $r->num_rows();
        if ($r->num_rows() == 1) {
            return 1;
        } else {
            return 0;
        }
    }
    function agregarPaciente($params)
    {
        $this->db->insert('pacientes', $params);
    }
    function obtenerPaciente($idPaciente)
    {
        return $this->db->get_where('pacientes', array('idPacientes' => $idPaciente))->row_array();
    }
}
