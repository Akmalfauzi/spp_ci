<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_laporan extends CI_Model {

	public function get_data()
	{
		return $this->db->get('Table', limit, offset);
	}	

}

/* End of file M_laporan.php */
/* Location: ./application/models/M_laporan.php */
