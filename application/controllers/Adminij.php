<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminij extends CI_Controller{

    public function __construct() {
        parent::__construct();

        $this->load->model('msekolah');
        $this->load->model('muser');
        $this->load->model('mmasukan');
        $this->load->model('msiswa');
        $this->load->model('mabout');

        $this->load->helper('url');

        $this->load->library('pagination');

        if($this->session->userdata('status') != 'login'){
            redirect(base_url('adminlogin'));
        }
    }
    
    function index() {
        if($this->session->userdata('level') == 'Operator'){
            $data = array (
                    'title' => 'Admin iJournal',
                    'content' => 'box-operator'
                );
        $this->load->view('view_admin/adminij', $data);
        } else {
            $data = array (
                    'title' => 'Admin iJournal',
                    'content' => 'box-administrator',
                    'sekolah' => $this->msekolah->jumlah_sekolah(),
                    'user' => $this->muser->jumlah_user(),
                    'masukan' => $this->mmasukan->jumlah_masukan(),
                    'siswa' => $this->msiswa->jumlah_siswa()
                );
        $this->load->view('view_admin/adminij', $data);
        }
    }

    function sekolah() {
        if($this->session->userdata('level') == 'Operator'){
             $data = array (
                    'title' => 'Data Sekolah',
                    'content' => 'tabel-data-sekolah2',
                    'datasekolah' => $this->msekolah->read()
                );
        $this->load->view('view_admin/adminij', $data);
        } else {
            $data = array (
                    'title' => 'Data Sekolah',
                    'content' => 'tabel-data-sekolah',
                    'datasekolah' => $this->msekolah->read()
                );
        $this->load->view('view_admin/adminij', $data);
        }
        
    }

    function detailsekolah($id) {
        $data = array (
                    'title' => 'Informasi Detail Sekolah',
                    'content' => 'view-data-sekolah',
                    'detsekolah' => $this->msekolah->get_id_sekolah($id)
                );
        $this->load->view('view_admin/adminij', $data);
    }

    function addsekolah(){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $data = array(
                    'title' => 'Tambah Data Sekolah',
                    'content' => 'add-data-sekolah'
                );
            $this->load->view('view_admin/adminij', $data);
        }
    }

    function create_sekolah(){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $this->msekolah->create();
            redirect('adminij/sekolah');
        }
    }

    function editsekolah($id){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $data = array (
                    'title' => 'Ubah Data Sekolah',
                    'content' => 'edit-data-sekolah',
                    'getsekolah' => $this->msekolah->get_id_sekolah($id)
                );
            $this->load->view('view_admin/adminij', $data);
        }
    }

    function update_sekolah(){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $id = $this->input->post('id_sekolah');
            $this->msekolah->update($id);
            redirect('adminij/sekolah');
        }
        
    }

    function delete_sekolah($id){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $this->msekolah->delete($id);
            redirect('adminij/sekolah');
        }
        
    }

    function data_pendaftar($id) {
        if($this->session->userdata('level') == 'Operator'){
            $data = array (
                    'title' => 'Data Peserta Didik Baru',
                    'content' => 'tabel-data-pendaftar2',
                    'datapendaftar' => $this->msekolah->pendaftar($id)
                );
            $this->load->view('view_admin/adminij', $data);
        } else {
            $data = array (
                    'title' => 'Data Peserta Didik Baru',
                    'content' => 'tabel-data-pendaftar',
                    'datapendaftar' => $this->msekolah->pendaftar($id)
                );
            $this->load->view('view_admin/adminij', $data);
        }
    }

    function data_user() {
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $data = array (
                    'title' => 'Data User',
                    'content' => 'tabel-data-user',
                    'datauser' => $this->muser->read()
                );
            $this->load->view('view_admin/adminij', $data);
        }
    }

    function detailuser($id) {
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $data = array (
                    'title' => 'Informasi Detail User',
                    'content' => 'view-data-user',
                    'detuser' => $this->muser->get_id_user($id)
                );
            $this->load->view('view_admin/adminij', $data);
        }
        
    }

    function adduser(){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $data = array(
                    'title' => 'Tambah Data User',
                    'content' => 'add-data-user',
                    'getlevel' => $this->muser->getlevel()
                );
            $this->load->view('view_admin/adminij', $data);
        }
        
    }

    function create_user(){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $this->muser->create();
            redirect('adminij/data_user');
        }
        
    }

    function edituser($id){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $data = array (
                    'title' => 'Ubah Data User',
                    'content' => 'edit-data-user',
                    'getuser' => $this->muser->get_id_user($id)
                );
            $this->load->view('view_admin/adminij', $data);
        }
        
    }

    function update_user(){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $id = $this->input->post('id_user');
            $this->muser->update($id);
            redirect('adminij/data_user');
        }
        
    }

    function delete_user($id){
        if ($this->session->userdata('level') == 'Operator') {
            redirect(base_url('adminij'));
        } else {
            $this->muser->delete($id);
            redirect('adminij/data_user');
        }
        
    }

    function masukan() {
        if ($this->session->userdata('level') == 'Operator') {
            $data = array (
                    'title' => 'Masukan',
                    'content' => 'add-data-masukan',
                    'datamasukan' => $this->mmasukan->read()
                );
            $this->load->view('view_admin/adminij', $data);
        }else {
            $data = array (
                    'title' => 'Masukan',
                    'content' => 'tabel-data-masukan',
                    'datamasukan' => $this->mmasukan->read()
                );
            $this->load->view('view_admin/adminij', $data);
        }
    }

    function create_masukan(){
        $this->mmasukan->create();
        redirect('adminij/');
    }

    function detailmasukan($id) {
        $data = array (
                    'title' => 'Informasi Detail Masukan',
                    'content' => 'view-data-masukan',
                    'detmasukan' => $this->mmasukan->get_id_masukan($id)
                );
        $this->load->view('view_admin/adminij', $data);
    }

    function delete_masukan($id){
        $this->mmasukan->delete($id);
        redirect('adminij/masukan');
    }

    function siswa() {
        $id = $this->session->userdata('id_user');
        if ($this->session->userdata('level') == 'Operator') {
            $data = array (
                    'title' => 'Data Calon Peserta Didik',
                    'content' => 'tabel-data-siswa2',
                    'datasiswa' => $this->msiswa->read_id($id)
                );
            $this->load->view('view_admin/adminij', $data);
        } else {
            $data = array (
                    'title' => 'Data Calon Peserta Didik',
                    'content' => 'tabel-data-siswa',
                    'datasiswa' => $this->msiswa->read()
                );
            $this->load->view('view_admin/adminij', $data);
        }
    }

    function detailsiswa($id) {
        $data = array (
                    'title' => 'Informasi Detail Calon Peserta Didik',
                    'content' => 'view-data-siswa',
                    'detsiswa' => $this->msiswa->get_id_siswa($id)
                );
        $this->load->view('view_admin/adminij', $data);
    }

    function addsiswa(){
        $data = array(
                    'title' => 'Tambah Data Calon Peserta Didik',
                    'content' => 'add-data-siswa',
                    'getidsekolah' => $this->msiswa->getidsekolah()
                );
        $this->load->view('view_admin/adminij', $data);
    }

    function create_siswa(){
        $this->msiswa->create();
        redirect('adminij/siswa');
    }

    function editsiswa($no_pendaftaran){
        $sekolah = $this->msekolah->listing_sekolah();
        $siswa = $this->msiswa->detail($no_pendaftaran);
        $data = array (
                    'title' => 'Ubah Data Calon Peserta Didik',
                    'content' => 'edit-data-siswa',
                    'sekolah' => $sekolah,
                    'siswa' => $siswa
                );
        $this->load->view('view_admin/adminij', $data);
    }

    function update_siswa(){
        $id = $this->input->post('no_pendaftaran');
        $this->msiswa->update($id);
        redirect('adminij/siswa');
    }

    function delete_siswa($id){
        $this->msiswa->delete($id);
        redirect('adminij/siswa');
    }

    function aboutus(){
        $data = array(
                    'title' => 'About',
                    'content' => 'view-about-us',
                    'dataabout' => $this->mabout->read()
                );
        $this->load->view('view_admin/adminij', $data);
    }

    function data_sekolah($offset = 0) {
        $config['base_url'] = site_url('adminij/data_sekolah');
        $config['total_rows'] = $this->msekolah->jumlah_sekolah();
        $config['per_page'] = 12;
        $config['use_page_number'] = TRUE;
        $config['num_links'] = 5;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = 'First';
        $config['first_tag_open'] = '<li class="prev page">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Last';
        $config['last_tag_open'] = '<li class="next page">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = 'Next';
        $config['next_tag_open'] = '<li class="next page">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = 'Prev';
        $config['prev_tag_open'] = '<li class="prev page">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page">';
        $config['num_tag_close'] = '</li>';
        $this->pagination->initialize($config);
        $data = array (
                    'title' => 'Data Sekolah',
                    'content' => 'view-data-peserta-didik',
                    /*'datasekolah' => $this->msekolah->read(),*/
                    'datasekolah' => $this->msekolah->get_limit_sekolah($config['per_page'], $offset),
                    'link' => $this->pagination->create_links()
                );
        $this->load->view('view_admin/adminij', $data);
    }

    function logout() {
        $data_session_unset = array(
                'id_user',
                'username',
                'level',
                'email',
                'status'
            );
        $this->session->unset_userdata($data_session_unset);
        redirect(base_url('adminlogin'));
    }
    
}