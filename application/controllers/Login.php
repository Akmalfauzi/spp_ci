<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
		$this->load->view('login/v_login');
	}

	public function proses_login()
	{
		// pengecekan dari form 
		$username = $this->input->post('username');
		$password = sha1($this->input->post('password'));

		$login = [
			'username' => $username,
			'password' => $password
		];

		// pengecekan data ke table petugas
		$cek_login = $this->M_login->get_data('petugas',$login);
		// pengecekan data ke table siswa
		$cek_login_siswa = $this->M_login->get_data('siswa',$login);

		// jika login sebagai admin/petugas
		if ($cek_login->num_rows() > 0) {
			// mengambil data satu baris petugas
			$row = $cek_login->row();
			// buat session
			$sess_admin = array(
				'id_petugas' => $row->id_petugas, 
				'username' => $row->username, 
				'level' => $row->level, 
			);
			$this->session->set_userdata($sess_admin);
			
			if ($this->session->userdata('level') == "admin") {
				// redirect ke halaman admin
				redirect('dashboard-admin');
			}elseif ($this->session->userdata('level') == "petugas") {
				redirect('dashboard-petugas');
			}
		}
		// jika login sebagai siswa
		elseif($cek_login_siswa->num_rows() > 0){
			// mengambil data satu baris pada table siswa
			$row_siswa = $cek_login_siswa->row();
			// buat session
			$sess_siswa = array(
				'nisn' => $row_siswa->nisn, 
				'nis' => $row_siswa->nis, 
				'username' => $row_siswa->username, 
				'level' => 'siswa'
			);
			$this->session->set_userdata($sess_siswa);
			// redirect ke halaman siswa
			// redirect('dashboard-siswa');
			redirect('history-pembayaran-siswa');	
		}
		// jika tidak ada data
		else{
			$this->session->set_flashdata('login_gagal', 'Login Gagal!');
			redirect('login');
		}
	}

}

/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
