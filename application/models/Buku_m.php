<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_m extends CI_Model {

	public function get_data_buku($id = null)
	{
		$this->db->select('*');
		$this->db->from('tbl_buku');
		if ($id != null) {
			$this->db->where('id_buku', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function get_data()	
	{
		$this->db->select('*');
		$this->db->from('tbl_buku');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_buku.id_kategori','left');
		$this->db->join('user', 'user.user_id = tbl_buku.user_id','left');
		$this->db->join('tbl_keahlian', 'tbl_keahlian.id_keahlian = tbl_buku.id_keahlian','left');
		$this->db->order_by('id_buku', 'desc');
		$query = $this->db->get();
		return $query;
	}

	public function detail_data($id_buku)
	{
		$this->db->select('*');
		$this->db->from('tbl_buku');
		$this->db->join('tbl_keahlian', 'tbl_keahlian.id_keahlian = tbl_buku.id_keahlian','left');
		$this->db->join('user', 'user.user_id = tbl_buku.user_id','left');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_buku.id_kategori','left');
		$this->db->where('id_buku', $id_buku);
		$query = $this->db->get()->result_array();
		return $query;
	}

	public function delete_data($data)
	{
		$this->db->delete('tbl_buku', array('id_buku' => $data['id_buku']));
	}

	public function del($id)
	{
		$this->db->where('id_buku', $id);
		$this->db->delete('tbl_buku');
	}

}