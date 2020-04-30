<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pembayaran extends CI_Model {

	public function get_data()
	{
		// $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
		$this->db->order_by('pembayaran.id_pembayaran', 'desc');
		return $this->db->get('pembayaran');
	}	

	public function get_laporan()
	{
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
		return $this->db->get('pembayaran');
	}

	public function get_history_siswa($nisn)
	{
		// $this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
		$this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->join('petugas', 'petugas.id_petugas = pembayaran.id_petugas');
		$this->db->where('pembayaran.nisn', $nisn);
		return $this->db->get('pembayaran');
	}

	public function get_one($id)
	{
		// $this->db->join('siswa', 'siswa.nisn = pembayaran.nisn');
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas');
		$this->db->where('siswa.nisn', $id);
		return $this->db->get('siswa');
	}

	public function tambah($data)
	{
		return $this->db->insert('siswa', $data);
	}

	public function update($id,$data)
	{
		$this->db->where('nisn', $id);
		$update = $this->db->update('siswa',$data);
		return $update;
	}

	public function hapus($id)
	{
		$this->db->where('nisn',$id);
		$hapus = $this->db->delete('siswa');
		return $hapus;

	}

	public function transaksi($data)
	{
		return $this->db->insert('pembayaran', $data);
	}



}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */
