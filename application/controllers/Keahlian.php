<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Keahlian extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Check jika tidak ada user id
		check_not_login();
		$this->load->model('keahlian_m');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$data['row'] = $this->keahlian_m->get_data();
		$this->template->load('template', 'keahlian/keahlian_data', $data);		
	}


	public function add()
	{
		$this->form_validation->set_rules('nama_keahlian', 'Nama keahlian', 'required');
		if($this->form_validation->run() == false){
			$this->template->load('template', 'keahlian/keahlian_data');
		}else{
			$post = $this->input->post(null, TRUE);
				$this->keahlian_m->add($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Keahlian berhasil disimpan');
				}
				redirect('keahlian');
		}
	}


	public function edit($id)
	{
		$this->form_validation->set_rules('nama_keahlian', 'Nama keahlian', 'required');
		
		if($this->form_validation->run() == false){
			$query = $this->keahlian_m->get_data($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->template->load('template', 'keahlian/keahlian_form_edit', $data);	
			}else {
				echo "<script>alert('Data tidak ditemukan');";
				echo "window.location='".site_url('keahlian')."'</script>";
			}
		}else{
				$post = $this->input->post(null, TRUE);
				$this->keahlian_m->edit($post);
				if ($this->db->affected_rows() > 0) {
					$this->session->set_flashdata('success', 'Data Keahlian berhasil diubah');
				}
				redirect('keahlian');
		}
	}

	public function del()
	{
		$id = $this->input->post('id_keahlian');
		$this->keahlian_m->del($id);

		if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Keahlian berhasil dihapus!!!');
			}
		redirect('keahlian');
	}
	
}
	