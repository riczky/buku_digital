<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book_m extends CI_Model {

	public function get_data_buku($id = null)
	{
		$this->db->select('*');
		$this->db->from('buku');
		if ($id != null) {
			$this->db->where('id_buku', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function insert($data, $tabel)
	{
		return $this->db->insert($tabel, $data);
	}

	public function getDataById($id)
	{
		return $this->db->get_where('buku', ['id_buku' => $id])->row_array();
	}

	public function del($id)
	{
		$this->db->where('id_buku', $id);
		$this->db->delete('buku');
	}

	public function update($data, $tabel)
	{
        $this->db->where('id_buku', $this->input->post('id_buku'));
        $this->db->update($tabel, $data);
	}
}