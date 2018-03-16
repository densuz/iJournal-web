<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Android extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('mandroid');
	}

	public function index()
	{
		echo json_encode($this->mandroid->read());
	}

	function sekolah_search(){
		$query = $this->uri->segment(3);
		$query2 = str_replace('%20', '%', $query);
		$sekolah = $this->mandroid->read_search($query2);
		echo json_encode($sekolah);
	}

	function siswa_search(){
		$id =  $this->uri->segment(3);
		$query = $this->uri->segment(4);
		$query2 = str_replace('%20', '%', $query);
		$siswa = $this->mandroid->siswa_search($id, $query2);
		echo json_encode($siswa);
	}

	function siswa(){
		$id = $this->uri->segment(3);
		$siswa = $this->mandroid->read_siswa($id);
		echo json_encode($siswa);
	}

	function insert_masukan(){
		$email = $this->input->post("email_masukan");
		$isi = $this->input->post("isi_masukan");
		$this->mandroid->insert_masukan($email, $isi);
	}

}

/* End of file Android.php */
/* Location: ./application/controllers/Android.php */