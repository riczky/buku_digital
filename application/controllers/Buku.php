<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		// Check jika tidak ada user id
		check_not_login();
		$this->load->model('buku_m');
		$this->load->model('kategori_m');
		$this->load->model('keahlian_m');
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data = array(
            'title' => 'Data Buku',
            'buku' => $this->buku_m->get_data()
        );
         $this->template->load('template','buku/buku_data', $data);
	}

	public function add()
	{
		$data = array(
            'title' => 'Add Buku',
            'kategori' => $this->kategori_m->get_data(),
            'keahlian' => $this->keahlian_m->get_data(),
            'buku' => $this->buku_m->get_data(),
            'data' => $this->db->get('tbl_buku')->result()
        );
         $this->template->load('template','buku/buku_form_add', $data);
	}

	// public function insert()
	// {
		
	// 	$this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
	// 	$this->form_validation->set_rules('penulis', 'Penulis', 'required');
	// 	$this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
	// 	$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
	// 	$this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
	// 	$this->form_validation->set_rules('id_keahlian', 'Keahlian', 'required');

	// 	if (!empty($_FILES['file_buku']['name'])) {
	// 		$config['upload_path']          = './fileBuku/';
 //            $config['allowed_types']        = 'pdf';
 //            $config['max_size']             = 10240;
 //            // $config['encrypt_name']            = TRUE;
 //            $this->load->library('upload',$config);

	// 	}else(!empty($_FILES['file_sampul']['name'])){
	// 	$config['upload_path']          = './fileSampul/';
 //            $config['allowed_types']        = 'jpg|jpeg|png';
 //            $config['max_size']             = 2048;
 //            $config['encrypt_name']            = TRUE;
	// 	}


	// 	$this->load->library('upload',$config);

	// 	// File1
 //            if (!empty($_FILES['file_buku']['name'])) {
 //            	$this->upload->do_upload('file_buku');
 //            	$data1 = $this->upload->data();
 //            	$file1 = $data1['file_name'];
 //            }
 //            // File2
 //            if (!empty($_FILES['file_sampul']['name'])) {
 //            	$this->upload->do_upload('file_sampul');
 //            	$data2 = $this->upload->data();
 //            	$file2 = $data2['file_name'];
 //            }

 //            if ($this->form_validation->run())
 //            {
 //            	$judul = $this->input->post('judul_buku');
 //            	$penulis = $this->input->post('penulis');
 //            	$penerbit = $this->input->post('penerbit');
 //            	$deskripsi = $this->input->post('deskripsi');
 //            	$kategori = $this->input->post('id_kategori');
 //            	$keahlian = $this->input->post('id_keahlian');
 //            	// $user_id = $this->input->post('user_id');
 //            	// $id_user = $this->session->userdata('userid');
 //            	$data = ['judul_buku' => $judul, 
 //            				'penulis' => $penulis,
 //            				'penerbit' => $penerbit,
 //            				'deskripsi' => $deskripsi,
 //            				'id_kategori' => $kategori,
 //            				'id_keahlian' => $keahlian,
 //            				// 'user_id' => $user_id,
 //            				'file_buku' => $file1,
 //            				'file_sampul' => $file2
 //            				 ];
 //            	$insert = $this->db->insert('tbl_buku', $data);
 //            	if ($insert) {
 //            		$this->session->set_flashdata('success', 'Data Kategori berhasil disimpan');
 //            		redirect('buku');
 //            	} else{
 //            		redirect('buku');
 //            	}
 //            }
 //        }
	
      
      public function insert_data()
      {
            if (isset($_POST['submit'])) {
            $this->form_validation->set_rules('judul_buku', 'Judul Buku', 'required');
            $this->form_validation->set_rules('penulis', 'Penulis', 'required');
            $this->form_validation->set_rules('penerbit', 'Penerbit', 'required');
            $this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
            $this->form_validation->set_rules('id_kategori', 'Kategori', 'required');
            $this->form_validation->set_rules('id_keahlian', 'Keahlian', 'required');
            
            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'pdf|png|jpg|jpeg';
            $config['max_size']             = 5012;
            // $config['encrypt_name']            = TRUE;
            
            $this->load->library('upload',$config);

            // File1
            if (!empty($_FILES['file_buku']['name'])) {
                  $this->upload->do_upload('file_buku');
                  $data1 = $this->upload->data();
                  $file1 = $data1['file_name'];
            }
            // File2
            if (!empty($_FILES['file_sampul']['name'])) {
                  $this->upload->do_upload('file_sampul');
                  $data2 = $this->upload->data();
                  $file2 = $data2['file_name'];
            }
            if ($this->form_validation->run()) {
                  $judul = $this->input->post('judul_buku');
                  $penulis = $this->input->post('penulis');
                  $penerbit = $this->input->post('penerbit');
                  $deskripsi = $this->input->post('deskripsi');
                  $kategori = $this->input->post('id_kategori');
                  $keahlian = $this->input->post('id_keahlian');

                  $data = ['judul_buku' => $judul, 
                                    'penulis' => $penulis,
                                    'penerbit' => $penerbit,
                                    'deskripsi' => $deskripsi,
                                    'id_kategori' => $kategori,
                                    'id_keahlian' => $keahlian,
                                    // 'user_id' => $user_id,
                                    'file_buku' => $file1,
                                    'file_sampul' => $file2
                                     ];
                        $insert = $this->db->insert('tbl_buku',$data);
                        if ($insert) {
                              $this->session->set_flashdata('success', 'Data Buku berhasil disimpan');
                              redirect('buku');
                        } else{
                              redirect('buku');
                        }                        
                  }

            }
      }



      // public function delete($id_buku)
      // {
      //       // Menghapus file lama
      //       $buku = $this->buku_m->detail_data($id_buku);
      //       unlink('upload/' . $buku['file_buku']);
      //       unlink('upload/' . $buku['file_sampul']);

      //       $data = array(
      //             'id_buku' => $id_buku,
      //       );
      //       $this->buku_m->delete_data($data);
      //       $this->session->set_flashdata('success', 'Data Buku berhasil DiHapus..');
      //       redirect('buku');
      // }

      public function del($id_buku)
      {

            // Hapus Data Buku
            $buku = $this->buku_m->detail_data($id_buku);
            if ($buku['id_buku'] != '') {
                  unlink('upload/'. $buku['file_buku']);
                  unlink('upload/'. $buku['file_sampul']);
            }
            

            $id = $this->input->post('id_buku');
            $this->buku_m->del($id);

            if ($this->db->affected_rows() > 0) {
                  $this->session->set_flashdata('success', 'Data Buku  berhasil dihapus');
            }
            redirect('buku');
      }


}
