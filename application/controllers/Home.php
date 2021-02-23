<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('inbox_m');
	}

	public function index()
	{
		// $data['judul'] = 'Daftar Koleksi';
		// $data['ilmiah'] = $this->ilmiah_m->get_nama();
		$this->load->view('template_front/header');
		$this->load->view('front/home');
		$this->load->view('template_front/footer');
	}

	function kirim_pesan(){
		$nama=htmlspecialchars($this->input->post('nama',TRUE),ENT_QUOTES);
		$email=htmlspecialchars($this->input->post('email',TRUE),ENT_QUOTES);
		$telp=htmlspecialchars($this->input->post('telp',TRUE),ENT_QUOTES);
		$pesan=htmlspecialchars(trim($this->input->post('pesan',TRUE)),ENT_QUOTES);
		$this->inbox_m->kirim_pesan($nama,$email,$telp,$pesan);
		echo $this->session->set_flashdata('msg',"<div class='alert alert-info'>Terima kasih telah memberi saran kepada kami.</div>");
		redirect('home');
	}

	// public function kategori($id_kategori)
	// {
	// 	$data['judul'] = 'Kategori Buku';
	// 	// $data['ilmiah'] = $this->ilmiah_m->get_nama();
	// 	$this->load->view('template_front/header');
	// 	$this->load->view('front/v_kategori', $data);
	// 	$this->load->view('template_front/footer');
	// }



}