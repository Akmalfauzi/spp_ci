<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataTunggakan extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Tunggakan';
		$data['data_tunggakan'] = $this->M_tunggakan->get_data()->result(); 
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_tunggakan/data_tunggakan',$data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Tunggakan';
		$data['data_siswa'] = $this->M_siswa->get_data()->result(); 
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_tunggakan/tambah_tunggakan',$data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
		$nama = $this->input->post('nama_siswa');
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');

		$data = array(
			'nisn' => $nama, 
			'id_petugas' => $this->session->userdata('id_petugas'), 
			'bulan' => $bulan, 
			'tahun' => $tahun, 
		);

		// $tunggakan = $this->M_tunggakan->tambah($data);
		// $pembayaran = $this->M_tunggakan->get_one($nama)->row();
		// $nisn = $pembayaran->nisn;

		// $data = array(
		// 	'nisn' => $nama, 
		// 	'id_petugas' => $this->session->userdata('id_petugas'), 
		// 	'bulan' => $bulan, 
		// 	'tahun' => $tahun, 
		// );

		redirect('data-tunggakan');
	}

	public function edit($id)
	{
		$data['title'] = 'Edit KElas';
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

		$this->M_kelas->update($id,$data);

		redirect('data-kelas');
	}

	public function hapus($id)
	{
		$this->M_kelas->hapus($id);
		redirect('data-kelas');
	}

}

/* End of file DataSiswa.php */
/* Location: ./application/controllers/DataSiswa.php */
