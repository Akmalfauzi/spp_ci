<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_spp extends CI_Model {

	public function get_data()
	{
		return $this->db->get('spp');
	}	

	public function get_one($id)
	{
		$this->db->where('id_spp', $id);
		return $this->db->get('spp');
	}

	public function tambah($data)
	{
		return $this->db->insert('spp', $data);
	}

	public function update($id,$data)
	{
		$this->db->where('id_spp', $id);
		$update = $this->db->update('spp',$data);
		return $update;
	}

	public function hapus($id)
	{
		$this->db->where('id_spp',$id);
		$hapus = $this->db->delete('spp');
		return $hapus;
	}



}

/* End of file M_siswa.php */
/* Location: ./application/models/M_siswa.php */
