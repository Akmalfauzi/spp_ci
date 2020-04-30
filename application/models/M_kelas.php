<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kelas extends CI_Model {

	public function get_data()
	{
		return $this->db->get('kelas');
	}	

	public function get_one($id)
	{
		$this->db->where('id_kelas', $id);
		return $this->db->get('kelas');
	}

	public function tambah($data)
	{
		return $this->db->insert('kelas', $data);
	}

	public function update($id,$data)
	{
		$this->db->where('id_kelas', $id);
		$update = $this->db->update('kelas',$data);
		return $update;
	}

	public function hapus($id)
	{
		$this->db->where('id_kelas',$id);
		$this->db->delete('kelas');
		$this->db->where('siswa.id_kelas', $id);
		$hapus = $this->db->delete('siswa');
		return $hapus;
	}

	public function jumlah()
	{
		$query = $this->db->get('kelas');
		return $query->num_rows();
	}



}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */
