<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login_model extends CI_Model
{
    public function ingresar($login,$password){
        $this->db->select('*');
        $this->db->from('usuarios');
        $this->db->where('login',$login);
        $this->db->where('password',$password);
        return $this->db->get();
    }
}


?>