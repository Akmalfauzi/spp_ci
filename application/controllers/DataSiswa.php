<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataSiswa extends CI_Controller {

	public function index()
	{
		$data['title'] = 'Data Siswa';
		$data['data_siswa'] = $this->M_siswa->get_data()->result(); 
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_siswa/data_siswa',$data);
		$this->load->view('layouts/footer');
	}

	public function create()
	{
		$data['title'] = 'Tambah Siswa';
		$data['data_kelas'] = $this->M_kelas->get_data()->result();
		$data['data_spp'] = $this->M_spp->get_data()->result();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_siswa/tambah_siswa',$data);
		$this->load->view('layouts/footer');
	}

	public function store()
	{
        $this->form_validation->set_rules(
        'nisn', 'NISN',
        'required|max_length[10]|is_unique[siswa.nisn]',
        array(
                // 'required'      => '%s.',
                'is_unique'     => '%s Sudah ada!'
		     )
		);
		$this->form_validation->set_rules(
        'nis', 'NIS',
        'required|max_length[8]|is_unique[siswa.nis]',
        array(
                // 'required'      => '%s.',
                'is_unique'     => '%s Sudah ada!'
		     )
		);
		// $this->form_validation->set_rules('nis', 'NIS', 'required|max_length[8]');
		$this->form_validation->set_rules('nama', 'Nama', 'required|max_length[35]');
		$this->form_validation->set_rules('username', 'Username', 'required|max_length[35]');
		$this->form_validation->set_rules('password', 'Password', 'required|max_length[40]');
		$this->form_validation->set_rules('kelas', 'Kelas', 'required');
		$this->form_validation->set_rules('alamat', 'Alamat', 'required');
		$this->form_validation->set_rules('no_telp', 'No Telepon', 'required|max_length[13]');

		if ($this->form_validation->run() == FALSE)
        {
         	$data['title'] = 'Tambah Siswa';
			$data['data_kelas'] = $this->M_kelas->get_data()->result();
			$data['data_spp'] = $this->M_spp->get_data()->result();
			$this->load->view('layouts/header', $data);
			$this->load->view('layouts/sidebar');
			$this->load->view('admin/data_siswa/tambah_siswa',$data);
			$this->load->view('layouts/footer'); 
			// redirect('tambah-siswa'); 
        }else{
        	$nisn = $this->input->post('nisn');
			$nis = $this->input->post('nis');
			$nama = $this->input->post('nama');
			$user = $this->input->post('username');
			$pass = sha1($this->input->post('password'));
			$kelas = $this->input->post('kelas');
			$alamat = $this->input->post('alamat');
			$no = $this->input->post('no_telp');
			$tahun = $this->input->post('tahun');

			$data = array(
				'nisn' => $nisn, 
				'nis' => $nis, 
				'nama' => $nama, 
				'username' => $user, 
				'password' => $pass, 
				'id_kelas' => $kelas, 
				'id_petugas' => $this->session->userdata('id_petugas'),
				'alamat' => $alamat, 
				'no_telp' => $no, 
				'id_spp' => $tahun, 
			);
			$tambah = $this->M_siswa->tambah($data);
			if ($tambah > 0) {
				$pesan = $this->session->set_flashdata('sukses', 'Data berhasil ditambahkan!');
			}else{
				$pesan = $this->session->set_flashdata('gagal', 'Data gagal ditambahkan!');
			}
			redirect('data-siswa');
        }
		// $cek_nisn = $this->M_siswa->cek_nisn($nisn);

			

			// var_dump($data);

		

	}

	public function edit($id)
	{
		$data['title'] = 'Edit Siswa';
		$data['data_kelas'] = $this->M_kelas->get_data()->result();
		$data['data_spp'] = $this->M_spp->get_data()->result();
		$data['siswa'] = $this->M_siswa->get_one($id)->row();
		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar');
		$this->load->view('admin/data_siswa/edit_siswa',$data);
		$this->load->view('layouts/footer');
	}

	public function update($id)
	{
		$pass = $this->input->post('password');
		if ($pass == "" || $pass == null ||empty($pass)) {
			$nisn = $this->input->post('nisn');
			$nis = $this->input->post('nis');
			$nama = $this->input->post('nama');
			$user = $this->input->post('username');
			$kelas = $this->input->post('kelas');
			$alamat = $this->input->post('alamat');
			$no = $this->input->post('no_telp');
			$tahun = $this->input->post('tahun');

			$data = array(
				'nisn' => $nisn, 
				'nis' => $nis, 
				'nama' => $nama, 
				'username' => $user, 
				'id_kelas' => $kelas, 
				'id_petugas' => $this->session->userdata('id_petugas'),
				'alamat' => $alamat, 
				'no_telp' => $no, 
				// 'id_spp' => $tahun, 
			);

			$update = $this->M_siswa->update($id,$data);
			if ($update > 0) {
				$pesan = $this->session->set_flashdata('sukses', 'Data berhasil diperbaharui!');
			}else{
				$pesan = $this->session->set_flashdata('gagal', 'Data gagal diperbaharui!');
			}
		}else{
			$nisn = $this->input->post('nisn');
			$nis = $this->input->post('nis');
			$nama = $this->input->post('nama');
			$user = $this->input->post('username');
			$kelas = $this->input->post('kelas');
			$alamat = $this->input->post('alamat');
			$no = $this->input->post('no_telp');
			$tahun = $this->input->post('tahun');

			$data = array(
				'nisn' => $nisn, 
				'nis' => $nis, 
				'nama' => $nama, 
				'username' => $user, 
				'password' => sha1($pass), 
				'id_kelas' => $kelas, 
				'id_petugas' => $this->session->userdata('id_petugas'),
				'alamat' => $alamat, 
				'no_telp' => $no, 
				// 'id_spp' => $tahun, 
			);

			$update = $this->M_siswa->update($id,$data);
			if ($update > 0) {
				$pesan = $this->session->set_flashdata('sukses', 'Data berhasil diperbaharui!');
			}else{
				$pesan = $this->session->set_flashdata('gagal', 'Data gagal diperbaharui!');
			}
		}
		

		redirect('data-siswa');
	}

	public function hapus($id)
	{
		$hapus = $this->M_siswa->hapus($id);
		if ($hapus > 0) {
			$pesan = $this->session->set_flashdata('sukses', 'Data berhasil dihapus!');
		}else{
			$pesan = $this->session->set_flashdata('gagal', 'Data gagal dihapus!');
		}
		redirect('data-siswa');
	}

}

/* End of file DataSiswa.php */
/* Location: ./application/controllers/DataSiswa.php */
