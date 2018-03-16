<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ij extends CI_Controller{
    public function __construct() {
        parent::__construct();

        $this->load->model('mabout');

    }
    
    function index(){
        $data['title'] = 'iJournal';
        $data['dataabout'] = $this->mabout->read();
        $this->load->view('ij', $data);
    }

}