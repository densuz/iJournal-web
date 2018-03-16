<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mabout extends CI_Model {

	function read() {
		$this->db->order_by('id_aboutus', 'asc');
        return $this->db->get('tb_aboutus')->result();
    }	

}

/* End of file Mabout.php */
/* Location: ./application/models/Mabout.php */