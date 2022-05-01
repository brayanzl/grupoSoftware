<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Usuario_model extends CI_Model
{

	function lista(){
        $this->db->order_by('idUsuarios','desc');
        return $this->db->get('usuarios')->result_array();
    }
}
