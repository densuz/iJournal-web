<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminlogin extends CI_Controller {

	public function __construct() {
		parent::__construct();
        $this->load->model('mlogin');
        if($this->session->userdata('id_user')){
            if($this->session->userdata('level') == 'Administrator'){
                redirect('adminij');
            }elseif($this->session->userdata('level') == 'Operator'){
                redirect('adminij');
            }
        }
	}

	public function index() {
		$data['title'] = "Login Admin-iJournal";
        $data['error'] = "";
        $this->load->view('view_admin/login', $data);
    }

    public function auth() {
    	$id_user = $this->input->post('id_user');
        $password = $this->input->post('password');
        $result = $this->mlogin->login($id_user, $password);
        if($result->num_rows() > 0 ){
            foreach ($result->result() as $row){
            $data_session = array(
                'id_user' => $row->id_user,
                'username' => $row->username,
                'level' => $row->level,
                'email' => $row->email,
                'status' => 'login'
            );
            }
            $this->session->set_userdata($data_session);
            redirect(base_url('adminij'));
            if($this->session->userdata('level') == 'Administrator'){
                redirect('adminij');
            }elseif($this->session->userdata('level') == 'Operator'){
                redirect('adminij');
            }
        }else{
            $data['title'] = "Login Admin-iJournal";
            $data['error'] = "<div class='alert alert-error'><center><strong>ID. User/Password Salah! </strong> Silakan coba lagi.</center></div>";
            $this->load->view('view_admin/login', $data);
        }
    }

}

/* End of file Adminlogin.php */
/* Location: ./application/controllers/Adminlogin.php */