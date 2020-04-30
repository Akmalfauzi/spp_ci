<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataPetugas extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Petugas';
		$data['data_petugas'] = $this->M_petugas->get_data()->result(); 
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_petugas/data_petugas',$data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Petugas';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_petugas/tambah_petugas');
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$nama = $this->input->post('nama_petugas');
		$user = $this->input->post('username');
		$pass = sha1($this->input->post('password'));
		$level = $this->input->post('level');

		$data = array(
			'nama_petugas' => $nama, 
			'username' => $user, 
			'password' => $pass, 
			'level' => $level, 
		);

		$tambah = $this->M_petugas->tambah($data);
		if ($tambah > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal ditambahkan!');
		}

		redirect('data-petugas');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Petugas';
		$data['petugas'] = $this->M_petugas->get_one($id)->row();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_petugas/edit_petugas',$data);
		$this->load->view('layouts/footer');

		// $row = $data['petugas'];

		// $sess_admin = array(
		// 		'id_petugas' => $row->id_petugas, 
		// 		'username' => $row->username, 
		// 		'level' => $row->level, 
		// 	);
		// $this->session->set_userdata($sess_admin);
	}

	public function update($id)
	{
		$pass = $this->input->post('password');
		if ($pass == "" || $pass == null ||empty($pass)) {
			$nama = $this->input->post('nama_petugas');
			$user = $this->input->post('username');
			$level = $this->input->post('level');

			$data = array(
				'nama_petugas' => $nama, 
				'username' => $user, 
				'level' => $level, 
			);

			$update = $this->M_petugas->update($id,$data);
		}else{
			$nama = $this->input->post('nama_petugas');
			$user = $this->input->post('username');
			$level = $this->input->post('level');

			$data = array(
				'nama_petugas' => $nama, 
				'username' => $user, 
				'password' => sha1($pass), 
				'level' => $level, 
			);

			$update = $this->M_petugas->update($id,$data);
		}

		if ($update > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil diperbaharui!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal diperbaharui!');
		}
		// var_dump($pass);

		redirect('data-petugas');
	}

	public function hapus($id)
	{
		$hapus = $this->M_petugas->hapus($id);
		if ($hapus > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil dihapus!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal dihapus!');
		}
		redirect('data-petugas');
	}

}

/* End of file DataSiswa.php */
/* Location: ./application/controllers/DataSiswa.php */
