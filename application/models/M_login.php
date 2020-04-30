<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model {

	public function get_data($table,$where)
	{
		return $this->db->get_where($table, $where);
	}	

}

/* End of file M_login.php */
/* Location: ./application/models/M_login.php */
