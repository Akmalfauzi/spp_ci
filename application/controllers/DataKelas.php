<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataKelas extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Kelas';
		$data['data_kelas'] = $this->M_kelas->get_data()->result(); 
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_kelas/data_kelas',$data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Kelas';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_kelas/tambah_kelas');
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$nama = $this->input->post('nama_kelas');
		$komp = $this->input->post('kompetensi_keahlian');

		$data = array(
			'nama_kelas' => $nama, 
			'kompetensi_keahlian' => $komp, 
		);

		$tambah = $this->M_kelas->tambah($data);

		if ($tambah > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal ditambahkan!');
		}

		redirect('data-kelas');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Kelas';
		$data['kelas'] = $this->M_kelas->get_one($id)->row();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_kelas/edit_kelas',$data);
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{
		$nama = $this->input->post('nama_kelas');
		$komp = $this->input->post('kompetensi_keahlian');

		$data = array(
			'nama_kelas' => $nama, 
			'kompetensi_keahlian' => $komp, 
		);

		$update = $this->M_kelas->update($id,$data);
		if ($update > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil diperbaharui!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal diperbaharui!');
		}

		redirect('data-kelas');
	}

	public function hapus($id)
	{
		$hapus = $this->M_kelas->hapus($id);
		if ($hapus > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil dihapus!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal dihapus!');
		}
		redirect('data-kelas');
	}

}

/* End of file DataSiswa.php */
/* Location: ./application/controllers/DataSiswa.php */
