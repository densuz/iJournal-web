<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Msiswa extends CI_Model {

	function create() {
        $data = array(
            'no_pendaftaran' => $this->input->post('no_pendaftaran'),
            'nama_siswa' => $this->input->post('nama_siswa'),
            'alamat' => $this->input->post('alamat'),
            'jns_kel' => $this->input->post('jns_kel'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'id_sekolah' => $this->input->post('id_sekolah'),
            'telp_siswa' => $this->input->post('telp_siswa'),
            'nilai_siswa' => $this->input->post('nilai_siswa')
        );
        return $this->db->insert('tb_siswa', $data); //('nama_tabel', value)
    }

	function read_id($id) {
		$this->db->order_by('no_pendaftaran', 'asc');
		$this->db->select('*');
		$this->db->from('tb_siswa a');
        $this->db->where('a.id_sekolah', $id);
		$this->db->join('tb_sekolah b', 'a.id_sekolah = b.id_sekolah');
        return $this->db->get()->result();
    }

    function read() {
        $this->db->order_by('no_pendaftaran', 'asc');
        $this->db->select('*');
        $this->db->from('tb_siswa a');
        $this->db->join('tb_sekolah b', 'a.id_sekolah = b.id_sekolah');
        return $this->db->get()->result();
    }

    function update($id) {
        $data = array(
            'no_pendaftaran' => $this->input->post('no_pendaftaran'),
            'nama_siswa' => $this->input->post('nama_siswa'),
            'alamat' => $this->input->post('alamat'),
            'jns_kel' => $this->input->post('jns_kel'),
            'asal_sekolah' => $this->input->post('asal_sekolah'),
            'id_sekolah' => $this->input->post('id_sekolah'),
            'telp_siswa' => $this->input->post('telp_siswa'),
            'nilai_siswa' => $this->input->post('nilai_siswa')
        );
        $this->db->where('no_pendaftaran', $id); //where
        return $this->db->update('tb_siswa', $data); //('nama_tabel', value)
    }

    function get_id_siswa($id) {
        $this->db->where('no_pendaftaran', $id); //order by
        return $this->db->get('tb_siswa')->result_array();
    }
    
    function delete($id) {
        $this->db->where('no_pendaftaran', $id); //where
        return $this->db->delete('tb_siswa');
    }

    function jumlah_siswa() {
        $query = $this->db->get('tb_siswa');
        return $query->num_rows();
    }

    function getidsekolah(){
        $this->db->order_by('id_sekolah', 'asc');
        return $this->db->get('tb_sekolah')->result();
    }

    public function detail($no_pendaftaran) {
        $this->db->select('*');
        $this->db->from('tb_siswa');
        $this->db->where('no_pendaftaran',$no_pendaftaran);
        $this->db->order_by('no_pendaftaran','DESC');
        return $this->db->get()->row();
    }
    
}

/* End of file Msiswa.php */
/* Location: ./application/models/Msiswa.php */