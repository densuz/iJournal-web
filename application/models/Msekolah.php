<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msekolah extends CI_Model {

	function create() {
        $data = array(
            'id_sekolah' => $this->input->post('id_sekolah'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'alamat_sekolah' => $this->input->post('alamat_sekolah'),
            'telp_sekolah' => $this->input->post('telp_sekolah'),
            'email_sekolah' => $this->input->post('email_sekolah'),
            'website_sekolah' => $this->input->post('website_sekolah'),
            'kuota' => $this->input->post('kuota'),
            'min_nilai' => $this->input->post('min_nilai'),
            'info_umum' => $this->input->post('info_pendaftaran').' '.$this->input->post('info_pengumuman'),
            'id_user' => $this->input->post('id_user')
        );
        return $this->db->insert('tb_sekolah', $data); //('nama_tabel', value)
    }

	function read() {
		$this->db->order_by('id_sekolah', 'asc');
        return $this->db->get('tb_sekolah')->result();
    }

    function update($id) {
        $data = array(
            'id_sekolah' => $this->input->post('id_sekolah'),
            'nama_sekolah' => $this->input->post('nama_sekolah'),
            'alamat_sekolah' => $this->input->post('alamat_sekolah'),
            'telp_sekolah' => $this->input->post('telp_sekolah'),
            'email_sekolah' => $this->input->post('email_sekolah'),
            'website_sekolah' => $this->input->post('website_sekolah'),
            'kuota' => $this->input->post('kuota'),
            'min_nilai' => $this->input->post('min_nilai'),
            'info_umum' => $this->input->post('info_umum'),
            'id_user' => $this->input->post('id_user')
        );
        $this->db->where('id_sekolah', $id); //where
        return $this->db->update('tb_sekolah', $data); //('nama_tabel', value)
    }

    function get_id_sekolah($id) {
        $this->db->where("id_sekolah", $id); //order by
        return $this->db->get('tb_sekolah')->result_array();
    }
    
    function delete($id) {
        $this->db->where('id_sekolah', $id); //where
        return $this->db->delete('tb_sekolah');
    }

    function jumlah_sekolah() {
        $query = $this->db->get('tb_sekolah');
        return $query->num_rows();
    }

    function get_limit_sekolah($limit, $offset) {
        return $this->db->get('tb_sekolah', $limit, $offset)->result();
    }

    function pendaftar($id) {
        $this->db->select('*');     
        $this->db->from('tb_siswa a');
        $this->db->join('tb_sekolah b', 'a.id_sekolah = b.id_sekolah');
        $this->db->where('b.id_sekolah', $id);
        $this->db->order_by('nilai_siswa', 'desc');
        return $this->db->get()->result();
    }

    function listing_sekolah() {
        $this->db->select('*');
        $this->db->from('tb_sekolah');
        $this->db->order_by('id_sekolah','DESC');
        return $this->db->get()->result();
    }

}

/* End of file Msekolah.php */
/* Location: ./application/models/Msekolah.php */