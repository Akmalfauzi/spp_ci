<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}

	public function siswa()
	{
		$data['title'] = 'Dashboard';
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar');
		$this->load->view('siswa/v_siswa');
		$this->load->view('layouts/footer');
	}

	public function admin()
	{
		$data['title'] = 'Dashboard';
		$data['siswa'] = $this->M_siswa->jumlah();
		$data['kelas'] = $this->M_kelas->jumlah();
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/v_admin',$data);	
		$this->load->view('layouts/footer');
	}

	public function petugas()
	{
		$data['title'] = 'Dashboard';
		$data['data_siswa'] = $this->M_siswa->get_data()->result(); 
		$data['siswa'] = $this->M_siswa->jumlah();
		$data['kelas'] = $this->M_kelas->jumlah();
		$this->load->view('layouts/header',$data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/v_admin',$data);	
		$this->load->view('layouts/footer');
	}

	public function loggof()
	{
		$this->session->sess_destroy();
		$url = base_url('');
		redirect($url);
	}
}
