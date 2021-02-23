<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian_m extends CI_Model {

	public function get_data($id = null)
	{
		$this->db->select('*');
		$this->db->from('tbl_keahlian');
		if ($id != null) {
			$this->db->where('id_keahlian', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['nama_keahlian'] = $post['nama_keahlian'];
		$this->db->insert('tbl_keahlian', $params);
	}

	public function del($id)
	{
		$this->db->where('id_keahlian', $id);
		$this->db->delete('tbl_keahlian');
	}


	public function edit($post)
	{
		$params['nama_keahlian'] = $post['nama_keahlian'];
		$this->db->where('id_keahlian', $post['id_keahlian']);
		$this->db->update('tbl_keahlian', $params);
	}









}