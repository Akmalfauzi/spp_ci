<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		// load library session 
		$this->load->library('session');
		// validasi ketika tidak ada session login
		// maka redirect ke login
		if (empty($this->session->userdata('level')))
			redirect('login');
	}

	public function index()
	{
		$data['title'] = 'Laporan';
		$data['pembayaran'] = $this->M_pembayaran->get_data()->result(); 
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/laporan/data_laporan',$data);
		$this->load->view('layouts/footer');
	}

}

/* End of file Laporan.php */
/* Location: ./application/controllers/Laporan.php */
