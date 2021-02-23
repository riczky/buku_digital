<?php
class Inbox extends CI_Controller{
	function __construct(){
		parent::__construct();
		check_not_login();
		$this->load->model('inbox_m');
	}

	function index(){
		$this->inbox_m->update_status_kontak();
		$x['data']=$this->inbox_m->get_all_inbox();
		$this->template->load('template', 'inbox/inbox_data', $x);
		// $this->load->view('admin/v_inbox',$x);
	}

	function hapus_inbox(){
		$kode=$this->input->post('kode');
		$this->inbox_m->hapus_kontak($kode);
		// echo $this->session->set_flashdata('msg','success-hapus'); 
		echo $this->session->set_flashdata('msg',"<div class='alert alert-success'>Rekomendasi koleksi buku telah dihapus.</div>");
		redirect('inbox');
	}
}