<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mandroid extends CI_Model {

	function read(){
		$this->db->order_by('min_nilai', 'desc');
		return $this->db->get('tb_sekolah')->result();
	}

	function read_search($query2){
		$result =  $this->db->query("SELECT * FROM tb_sekolah WHERE nama_sekolah LIKE '%$query2%' ORDER BY min_nilai DESC");
		return $result->result_array();
		/*$this->db->like('nama_sekolah', '$query2%');
		$this->db->order_by('min_nilai', 'desc');
		return $this->db->get('tb_sekolah')->result_array();*/
	}

	function read_siswa($id){
		$this->db->select('*');
		$this->db->order_by('nilai_siswa', 'desc');
		$this->db->from('tb_siswa a');
		$this->db->join('tb_sekolah b', 'a.id_sekolah=b.id_sekolah');
		$this->db->where('b.id_sekolah', $id);
		return $this->db->get()->result();
	}

	function siswa_search($id, $query2){
		$result =  $this->db->query("SELECT * FROM tb_sekolah a, tb_siswa b WHERE a.id_sekolah=b.id_sekolah AND b.nama_siswa LIKE '%$query2%' ORDER BY nilai_siswa DESC");
		return $result->result_array();
		/*$this->db->select('*');
		$this->db->order_by('nilai_siswa', 'desc');
		$this->db->from('tb_siswa a');
		$this->db->join('tb_sekolah b', 'a.id_sekolah=b.id_sekolah');
		$this->db->where('b.id_sekolah', $id);
		$this->db->like('nama_siswa', $query);
		return $this->db->get()->result_array();*/
	}

	function insert_masukan($email, $isi){
		$data = array (
				"id_masukan" => "",
				"email_masukan" => $email,
				"isi_masukan" => $isi
			);
		$this->db->insert('tb_masukan', $data);
	}

}

/* End of file Android.php */
/* Location: ./application/models/Android.php */