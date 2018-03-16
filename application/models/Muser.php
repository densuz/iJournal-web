<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Muser extends CI_Model {

    function create() {
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
            'email' => $this->input->post('email')
        );
        return $this->db->insert('tb_user', $data); //('nama_tabel', value)
    }

	function read() {
		$this->db->order_by('id_user', 'asc');
        return $this->db->get('tb_user')->result();
    }

    function update($id) {
        $data = array(
            'id_user' => $this->input->post('id_user'),
            'username' => $this->input->post('username'),
            'password' => md5($this->input->post('password')),
            'level' => $this->input->post('level'),
            'email' => $this->input->post('email')
        );
        $this->db->where('id_user', $id); //where
        return $this->db->update('tb_user', $data); //('nama_tabel', value)
    }

    function delete($id) {
        $this->db->where('id_user', $id); //where
        return $this->db->delete('tb_user');
    }

    function jumlah_user() {
        $query = $this->db->get('tb_user');
        return $query->num_rows();
    }

    function get_id_user($id) {
        $this->db->where("id_user", $id); //order by
        return $this->db->get('tb_user')->result_array();
    }

    function getlevel(){
        $this->db->order_by('level', 'asc');
        return $this->db->get('tb_user')->result();
    }

}

/* End of file Muser.php */
/* Location: ./application/models/Muser.php */