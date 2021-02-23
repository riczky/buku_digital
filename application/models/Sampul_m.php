<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sampul_m extends CI_Model {

	public function get_data($id = null)
	{
		$this->db->select('*');
		$this->db->from('tbl_sampul');
		if ($id != null) {
			$this->db->where('id_sampul', $id);
		}
		$query = $this->db->get();
		return $query;
	}

	public function getDataById($id)
	{
		return $this->db->get_where('tbl_sampul', ['id_sampul' => $id])->row_array();
	}

	public function get_data_sampul()	
	{
		$this->db->select('*');
		$this->db->from('tbl_sampul');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_sampul.id_kategori','left');
		$this->db->join('buku', 'buku.id_buku = tbl_sampul.id_buku','left');
		$this->db->join('tbl_keahlian', 'tbl_keahlian.id_keahlian = tbl_sampul.id_keahlian','left');
		$this->db->order_by('id_sampul', 'desc');
		$query = $this->db->get();
		return $query;
	}

	public function detail_data($id_sampul)
	{
		$this->db->select('*');
		$this->db->from('tbl_sampul');
		$this->db->join('tbl_keahlian', 'tbl_keahlian.id_keahlian = tbl_sampul.id_keahlian','left');
		$this->db->join('buku', 'buku.id_buku = tbl_sampul.id_buku','left');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_sampul.id_kategori','left');
		$this->db->where('id_sampul', $id_sampul);
		$query = $this->db->get()->row_array();
		return $query;
	}

	public function delete_data($data)
	{
		$this->db->delete('tbl_sampul', array('id_sampul' => $data['id_sampul']));
	}

	public function del($id)
	{
		$this->db->where('id_sampul', $id);
		$this->db->delete('tbl_sampul');
	}

	public function update($data, $tabel)
	{
        $this->db->where('id_sampul', $this->input->post('id_sampul'));
        $this->db->update($tabel, $data);
	}

	// Pagination
	public function get_sampul($limit, $start)	
	{
		$this->db->select('*');
		// $this->db->from('tbl_sampul');
		$this->db->join('tbl_keahlian', 'tbl_keahlian.id_keahlian = tbl_sampul.id_keahlian','left');
		$this->db->join('buku', 'buku.id_buku = tbl_sampul.id_buku','left');
		$this->db->join('tbl_kategori', 'tbl_kategori.id_kategori = tbl_sampul.id_kategori','left');
		return $this->db->get('tbl_sampul',$limit,$start);
	}

	public function countAllSampul()
	{
		return $this->db->get('tbl_sampul')->num_rows();
	}
}