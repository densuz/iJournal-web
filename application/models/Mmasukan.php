<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mmasukan extends CI_Model {

    function create() {
        $data = array(
            'email_masukan' => $this->input->post('email_masukan'),
            'isi_masukan' => $this->input->post('isi_masukan')
        );
        return $this->db->insert('tb_masukan', $data); //('nama_tabel', value)
    }

	function read() {
		$this->db->order_by('id_masukan', 'asc');
        return $this->db->get('tb_masukan')->result();
    }

    function get_id_masukan($id) {
        $this->db->where("id_masukan", $id); //order by
        return $this->db->get('tb_masukan')->result_array();
    }
    
    function delete($id) {
        $this->db->where('id_masukan', $id); //where
        return $this->db->delete('tb_masukan');
    }

    function jumlah_masukan() {
        $query = $this->db->get('tb_masukan');
        return $query->num_rows();
    }

}

/* End of file Mmasukan.php */
/* Location: ./application/models/Mmasukan.php */