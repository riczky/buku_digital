<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Book extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Check jika tidak ada user id
		check_not_login();
		$this->load->model('book_m');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data = array(
            'title' => 'Data Buku',
            'buku' => $this->book_m->get_data_buku()
        );
        $this->template->load('template','book/buku_data', $data);
	}

	public function add()
	{
		$data = array(
            'title' => 'Add Buku',
            'buku' => $this->book_m->get_data_buku(),
            'data' => $this->db->get('buku')->result()
        );
         $this->template->load('template','book/book_form_add', $data);
	}

    public function prosesAdd()
	{
		$id_buku=$this->input->post('id_buku');
		$file = $_FILES['file_buku']['name'];

		if ($file ='') {}else{
			$config['upload_path']          = './fileBuku/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 0;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_buku')) {
            	$error = $this->upload->display_errors();
            	$this->session->set_flashdata('failed', $error);
            	echo "<script>alert('Upload Gagal');</script>";
            	echo "<script>window.location='".site_url('book')."'</script>";die();
            	// echo 'upload gagal'; die();
            }else{
            	$file=$this->upload->data('file_name');
            }
            $data = array(
            	'id_buku' => $id_buku,
            	'file_buku' => $file
            );
            $this->book_m->insert($data, 'buku');
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('book');
		}
	}

		public function edit($id)
		{
			$data = array(
            'title' => 'Add Buku',
            'buku' => $this->book_m->getDataById($id),
            'data' => $this->db->get('buku')->result()
        	);
         	$this->template->load('template','book/book_form_edit', $data);		
		}

		public function prosesEdit($id)
		{
			$id_buku=$this->input->post('id_buku');
			$file = $_FILES['file_buku']['name'];

			$buku = $this->book_m->getDataById($id);
			if ($buku['file_buku'] != '') {
				unlink('fileBuku/'. $buku['file_buku']);
			}

			if ($file ='') {}else{
			$config['upload_path']          = './fileBuku/';
            $config['allowed_types']        = 'pdf';
            $config['max_size']             = 0;

            $this->load->library('upload', $config);

            if (!$this->upload->do_upload('file_buku')) {
            	$error = $this->upload->display_errors();
            	$this->session->set_flashdata('failed', $error);
            	echo "<script>alert('Update Gagal');</script>";
            	echo "<script>window.location='".site_url('book')."'</script>";die();
            	// echo 'upload gagal'; die();
            }else{
            	$file=$this->upload->data('file_name');
            }
            $data = array(
            	'id_buku' => $id_buku,
            	'file_buku' => $file
            );
            $this->book_m->update($data, 'buku');
            $this->session->set_flashdata('success', 'Data berhasil di Update');
            redirect('book');
		}



		}

      	public function del($id)
      	{

            // Hapus Data Buku
            $buku = $this->book_m->getDataById($id);
            if ($buku['id_buku'] != '') {
                  unlink('fileBuku/'. $buku['file_buku']);
            }
            
            $id = $this->input->post('id_buku');
            $this->book_m->del($id);

            if ($this->db->affected_rows() > 0) {
                  $this->session->set_flashdata('success', 'Data Buku  berhasil dihapus');
            }
            redirect('book');
      }



}