<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pembayaran extends CI_Controller {

	public function index()
	{
		$nisn = $this->input->get('cari');
		$data['title'] = 'Pembayaran';
		// $data['data_pembayaran'] = $this->M_tunggakan->get_data()->result(); 
		$data['siswa'] = $this->M_pembayaran->get_one($nisn)->row();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/pembayaran/data_pembayaran',$data);
		$this->load->view('layouts/footer');
		// var_dump($data['siswa']);
	}

	public function create()
	{
		$data['title'] = 'Tambah Pembayaran';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/pembayaran/tambah_pembayaran');
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
			$this->session->set_flashdata('sukses', 'Berhasil Ditambahkan');
		}

		redirect('data-kelas');
	}

	public function hapus($id)
	{
		$this->M_kelas->hapus($id);
		redirect('data-kelas');
	}

	public function detail($id)
	{
		$data['detail'] = $this->M_pembayaran->get_one($id)->row();
		$data['data_kelas'] = $this->M_kelas->get_data()->result();
		$data['title'] = 'Tambah Pembayaran';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/pembayaran/tambah_pembayaran',$data);
		$this->load->view('layouts/footer');
	}

	public function add()
	{
		$bulan_dibayar = $_POST['bulan_dibayar'];	
		$nisn = $_POST['nisn'];	
		$tgl = date('d-m-y');
		$tahun_dibayar = $_POST['tahun_dibayar'];
		$jumlah_bayar= $_POST['jumlah_bayar'];
		$id_petugas = $this->session->userdata('id_petugas');	

		$pembayaran = array(
			'nisn' => $nisn, 
			'id_petugas' => $id_petugas, 
			'tgl_bayar' => $tgl, 
			'bulan_dibayar' => $bulan_dibayar, 
			'tahun_dibayar' => $tahun_dibayar, 
			'jumlah_bayar' => $jumlah_bayar, 
		); 
		$tambah = $this->M_pembayaran->transaksi($pembayaran);

		if ($tambah > 0) {
			$this->session->set_flashdata('sukses', 'Berhasil Ditambahkan');
		}
		redirect('pembayaran');
	}

	public function history($id)
	{
		$data['history'] = $this->M_pembayaran->get_one($id)->result();
		$data['title'] = 'History Pembayaran';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/pembayaran/history_pembayaran',$data);
		$this->load->view('layouts/footer');
	}

	public function history_pembayaran()
	{
		$data['data_history'] = $this->M_pembayaran->get_data()->result();
		$data['title'] = 'History Pembayaran';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/pembayaran/history_pembayaran',$data);
		$this->load->view('layouts/footer');
	}

	public function history_pembayaran_siswa()
	{
		$nisn = $this->session->userdata('nisn');
		$data['data_history'] = $this->M_pembayaran->get_history_siswa($nisn)->result();
		$data['title'] = 'History Pembayaran';
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/pembayaran/history_pembayaran_siswa',$data);
		$this->load->view('layouts/footer');
	}

}

/* End of file DataSiswa.php */
/* Location: ./application/controllers/DataSiswa.php */
