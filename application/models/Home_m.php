<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home_m extends CI_Model {

	public function get_all_data_kategori()
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->order_by('id_kategori', 'desc');
		return $this->db->get()->result();
	}

	public function kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tbl_kategori');
		$this->db->where('id_kategori', $id_kategori);
		return $this->db->get()->row();
	}

	public function get_all_data_buku_kategori($id_kategori)
	{
		$this->db->select('*');
		$this->db->from('tbl_sampul');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_sampul.id_kategori','left');
		$this->db->join('buku', 'buku.id_buku = tbl_sampul.id_buku','left');
		$this->db->where('tbl_sampul.id_kategori', $id_kategori);
		return $this->db->get();		
	}
		
	public function get_all_data_keahlian()
	{
		$this->db->select('*');
		$this->db->from('tbl_keahlian');
		$this->db->order_by('id_keahlian', 'desc');
		return $this->db->get()->result();
	}
	
	public function keahlian($id_keahlian)
	{
		$this->db->select('*');
		$this->db->from('tbl_keahlian');
		$this->db->where('id_keahlian', $id_keahlian);
		return $this->db->get()->row();
	}

	public function get_all_data_buku_keahlian($id_keahlian)
	{
		$this->db->select('*');
		$this->db->from('tbl_sampul');
		$this->db->join('tbl_keahlian', 'tbl_keahlian.id_keahlian = tbl_sampul.id_keahlian','left');
		$this->db->join('buku', 'buku.id_buku = tbl_sampul.id_buku','left');
		$this->db->where('tbl_sampul.id_keahlian', $id_keahlian);
		return $this->db->get();		
	}	
}