<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataSpp extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Spp';
		$data['data_spp'] = $this->M_spp->get_data()->result(); 
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_spp/data_spp',$data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah SPP';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_spp/tambah_spp');
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$tahun = $this->input->post('tahun');
		$nominal = $this->input->post('nominal');

		$data = array(
			'tahun' => $tahun, 
			'nominal' => $nominal, 
		);

		$tambah = $this->M_spp->tambah($data);
		if ($tambah > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal ditambahkan!');
		}

		redirect('data-spp');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit';
		$data['spp'] = $this->M_spp->get_one($id)->row();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_spp/edit_spp',$data);
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{
		$tahun = $this->input->post('tahun');
		$nominal = $this->input->post('nominal');

		$data = array(
			'tahun' => $tahun, 
			'nominal' => $nominal, 
		);

		$update = $this->M_spp->update($id,$data);
		if ($update > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil diperbaharui!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal diperbaharui!');
		}

		redirect('data-spp');
	}

	public function hapus($id)
	{
		$hapus = $this->M_spp->hapus($id);
		if ($hapus > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil dihapus!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal dihapus!');
		}
		redirect('data-spp');
	}

}

/* End of file DataSiswa.php */
/* Location: ./application/controllers/DataSiswa.php */
