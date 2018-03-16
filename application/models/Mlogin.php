<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mlogin extends CI_Model {

	function login($id_user, $password) {
        $where = array(
            'id_user' => $id_user,
            'password' => md5($password)
        );
        $this->db->where($where);
        return $this->db->get('tb_user');
    }

}

/* End of file Mlogin.php */
/* Location: ./application/models/Mlogin.php */