<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tunggakan extends CI_Model {

	public function get_data()
	{
		$this->db->join('petugas', 'petugas.id_petugas = tunggakan.id_petugas', 'left');
		$this->db->join('siswa', 'siswa.nisn = tunggakan.nisn', 'left');
		return $this->db->get('tunggakan');
	}	

	public function get_one($id)
	{
		$this->db->where('nisn', $id);
		return $this->db->get('tunggakan');
	}

	public function tambah($data)
	{
		$this->db->insert('tunggakan', $data);
	}

	public function update($id,$data)
	{
		$this->db->where('nisn', $id);
		$this->db->update('tunggakan',$data);
	}

	public function hapus($id)
	{
		$this->db->where('nisn',$id);
		$this->db->delete('tunggakan');
	}



}

