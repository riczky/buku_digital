<?php
class Inbox_m extends CI_Model{

	public function get_data($id = null)
	{
		$this->db->select('*');
		$this->db->from('inbox');
		if ($id != null) {
			$this->db->where('inbox_id', $id);
		}
		$query = $this->db->get();
		return $query;
	}


	function kirim_pesan($nama,$email,$pesan,$telp){
		$hsl=$this->db->query("INSERT INTO inbox(inbox_nama,inbox_email,inbox_kontak,inbox_pesan) VALUES ('$nama','$email','$telp','$pesan')");
		return $hsl;
	}

	function get_all_inbox(){
		$hsl=$this->db->query("SELECT inbox.*,DATE_FORMAT(inbox_tanggal,'%d %M %Y') AS tanggal FROM inbox ORDER BY inbox_id DESC");
		return $hsl;
	}

	function hapus_kontak($kode){
		$hsl=$this->db->query("DELETE FROM inbox WHERE inbox_id='$kode'");
		return $hsl;
	}

	function update_status_kontak(){
		$hsl=$this->db->query("UPDATE inbox SET inbox_status='0'");
		return $hsl;
	}

	public function del($id)
	{
		$this->db->where('inbox_id', $id);
		$this->db->delete('inbox');
	}
}