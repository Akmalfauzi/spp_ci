<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petugas extends CI_Model {

	public function get_data()
	{
		return $this->db->get('petugas');
	}	

	public function get_one($id)
	{
		$this->db->where('id_petugas', $id);
		return $this->db->get('petugas');
	}

	public function tambah($data)
	{
		return $this->db->insert('petugas', $data);
	}

	public function update($id,$data)
	{
		$this->db->where('id_petugas', $id);
		$update = $this->db->update('petugas',$data);
		return $update;
	}

	public function hapus($id)
	{
		$this->db->where('id_petugas',$id);
		$hapus = $this->db->delete('petugas');
		return $hapus;
	}



}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */
