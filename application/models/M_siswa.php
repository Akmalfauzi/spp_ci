<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_siswa extends CI_Model {

	public function get_data()
	{
		$this->db->join('kelas', 'kelas.id_kelas = siswa.id_kelas', 'left');
		return $this->db->get('siswa');
	}	

	public function get_one($id)
	{
		$this->db->where('nisn', $id);
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

	public function jumlah()
	{
		$query = $this->db->get('siswa');
		return $query->num_rows();
	}

	public function cek_nisn($nisn)
	{
		$query = $this->db->get_where('siswa', ['nisn' => $nisn]);
		return $query->row();
	}



}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */
