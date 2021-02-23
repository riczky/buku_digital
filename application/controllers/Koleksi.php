<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Koleksi extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('sampul_m');
		$this->load->model('kategori_m');
		$this->load->model('keahlian_m');
	}



	// public function index()
	// {
	// 	$data['judul'] = 'Daftar Koleksi';
	// 	$data['sampul'] = $this->sampul_m->get_data_sampul();
	// 	$this->load->view('template_front/header_koleksi');
	// 	$this->load->view('front/koleksi',$data);
	// 	$this->load->view('template_front/footer');
	// }

	public function index()
	{
		$data['judul'] = 'Daftar Koleksi';
		

		// pagination
		$this->load->library('pagination');
		// config
		$config['base_url'] = 'http://localhost/buku_digital/koleksi/index';
		$config['total_rows'] = $this->sampul_m->countAllSampul();
		$config['per_page'] = 8;
		
		// Styling
		$config['full_tag_open'] = '<nav><ul class="pagination justify-content-center">';
		$config['full_tag_close'] = '</ul></nav>';

		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['prev_link'] = '&laquo';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');


		// initialize
		$this->pagination->initialize($config);
		

		$data['start'] = $this->uri->segment(3);
		$data['sampul'] = $this->sampul_m->get_sampul($config['per_page'],$data['start']);


		$this->load->view('template_front/header_koleksi');
		$this->load->view('front/koleksi',$data);
		$this->load->view('template_front/footer');
	}

	public function detail($id_sampul)
	{
		$data = array(
            'judul' => 'Detail Data',
            'kategori' => $this->kategori_m->get_data(),
            'keahlian' => $this->keahlian_m->get_data(),
            'sampul' => $this->sampul_m->detail_data($id_sampul)
        );
        $this->load->view('template_front/header_koleksi');
		$this->load->view('front/koleksi_detail',$data);
		$this->load->view('template_front/footer');

	}

	public function kategori($id_kategori)
	{
		$kategori = $this->home_m->kategori($id_kategori);
		$data['judul'] = 'Kategori Buku: '. $kategori->nama_kategori;
		$data['sampul'] = $this->home_m->get_all_data_buku_kategori($id_kategori);
		$this->load->view('template_front/header_koleksi');
		$this->load->view('front/kategori',$data);
		$this->load->view('template_front/footer_2');
	}

	public function keahlian($id_keahlian)
	{
		$keahlian = $this->home_m->keahlian($id_keahlian);
		$data['judul'] = 'Keahlian/Jurusan Buku: '. $keahlian->nama_keahlian;
		$data['keahlian'] = $this->home_m->get_all_data_buku_keahlian($id_keahlian);
		$this->load->view('template_front/header_koleksi');
		$this->load->view('front/keahlian',$data);
		$this->load->view('template_front/footer_2');
	}

	
}